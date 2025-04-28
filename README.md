# Cerbos PHP SDK

[![Latest Stable Version](http://poser.pugx.org/cerbos/cerbos-sdk-php/v)](https://packagist.org/packages/cerbos/cerbos-sdk-php)
[![Total Downloads](http://poser.pugx.org/cerbos/cerbos-sdk-php/downloads)](https://packagist.org/packages/cerbos/cerbos-sdk-php)
[![License](http://poser.pugx.org/cerbos/cerbos-sdk-php/license)](https://packagist.org/packages/cerbos/cerbos-sdk-php)

PHP client library for the [Cerbos](https://github.com/cerbos/cerbos) open source access control solution. This library
includes gRPC client for accessing the Cerbos PDP.

Find out more about Cerbos at https://cerbos.dev and read the documentation at https://docs.cerbos.dev.

# Installation

You can install the SDK via [Composer](https://getcomposer.org/). Run the following command:
```bash
composer require cerbos/cerbos-sdk-php
```

# Examples

## Creating a gRPC client

```php
$client = CerbosClientBuilder::newInstance($this->host)
    ->withPlaintext(true)
    ->build();
```

## Check a single principal and resource

```php
$request = CheckResourcesRequest::newInstance()
    ->withRequestId(RequestId::generate())
    ->withPrincipal(
        Principal::newInstance("john")
            ->withRole("employee")
            ->withPolicyVersion("20210210")
            ->withAttribute("department", AttributeValue::stringValue("marketing"))
            ->withAttribute("geography", AttributeValue::stringValue("GB"))
    )
    ->withResourceEntry(
        ResourceEntry::newInstance("leave_request", "xx125")
            ->withActions(["view:public", "approve"])
            ->withPolicyVersion("20210210")
            ->withAttribute("department", AttributeValue::stringValue("marketing"))
            ->withAttribute("geography", AttributeValue::stringValue("GB"))
            ->withAttribute("owner", AttributeValue::stringValue("john"))
    )
  
$checkResourcesResponse = $client->checkResources($request);
$resultEntry = $checkResourcesResponse->find("xx125");

if ($resultEntry->isAllowed("view:public")) { // returns true if `view:public` action is allowed
    // ...
}

if ($resultEntry->isAllowed("approve")) { // returns true if `approve` action is allowed
    // ...
}
```

## Check a single principal and multiple resource & action pairs

```php
$request = CheckResourcesRequest::newInstance()
    ->withRequestId(RequestId::generate())
    ->withPrincipal(
        Principal::newInstance("john")
            ->withRole("employee")
            ->withPolicyVersion("20210210")
            ->withAttribute("department", "marketing")
            ->withAttribute("geography", "GB")
    )
    ->withResourceEntries(
        array(
            ResourceEntry::newInstance("leave_request", "xx125")
                ->withAction("approve")
                ->withPolicyVersion("20210210")
                ->withAttribute("department", AttributeValue::stringValue("marketing"))
                ->withAttribute("geography", AttributeValue::stringValue("GB"))
                ->withAttribute("owner", AttributeValue::stringValue("john")),

            ResourceEntry::newInstance("leave_request", "xx225")
                ->withAction("defer")
                ->withPolicyVersion("20210210")
                ->withAttribute("department", AttributeValue::stringValue("marketing"))
                ->withAttribute("owner", AttributeValue::stringValue("john"))
        )
    )
                    
$checkResourcesResponse = $client->checkResources($request);

$resultEntry = $checkResourcesResponse->find("xx125");
if ($resultEntry->isAllowed("approve")) { // returns true if `approve` action is allowed
    // ...
}

$resultEntry = $checkResourcesResponse->find("xx225");
if ($resultEntry->isAllowed("defer")) { // returns true if `defer` action is allowed
    // ...
}
```

## Plan Resources API

```php
$request = PlanResourcesRequest::newInstance()
    ->withRequestId(RequestId::generate())
    ->withAction("approve")
    ->withActions(array("create", "delete"))
    ->withPrincipal(
        Principal::newInstance("maggie")
            ->withRole("manager")
            ->withAttribute("department", AttributeValue::stringValue("marketing"))
            ->withAttribute("geography", AttributeValue::stringValue("GB"))
            ->withAttribute("team", AttributeValue::stringValue("design"))
    )
    ->withResource(
        Resource::newInstance("leave_request", "xx125")
            ->withPolicyVersion("20210210")
    );                

$planResourcesResponse = $this->client->planResources($request);
if ($planResourcesResponse->isAlwaysAllowed()) {
    // ...
}
else if ($planResourcesResponse->isAlwaysDenied()) {
    // ...
}
else {
    // ...
}
```

# Upgrading from `v0.1.x`

Newer versions of the library make use of gRPC libraries. This is in order to make the integration with Cerbos easier to manage. This change requires existing users of 0.1.x versions to perform some migration steps.

## gRPC


This library requires the `gRPC` extension to be installed. Follow the [instructions for your environment](https://cloud.google.com/php/grpc#installing_the_grpc_extension) to install the extension.

## Differences between SDK API v0.1.x

### PHP version requirements

The minimum supported version of PHP is `8.3`.

### Simpler `CerbosClientBuilder`

`CerbosClientBuilder` is simpler and only expects `hostname` as a parameter.
```php
$client = CerbosClientBuilder::newInstance("localhost:3593")
    ->withPlaintext(true)
    ->build();
```

### Renamed `ResourceAction` to `ResourceEntry`

The `ResourceAction` class has been renamed to `ResourceEntry`.

### New `AttributeValue` builder class

Principal and resource attributes must be created using the `AttributeValue` builder class.

Creating a bool value;
```php
$val = AttributeValue::boolValue(true);
```

Creating a string value;
```php
$val = AttributeValue::stringValue("marketing");
```

### New `CheckResourcesRequest` and `PlanResourcesRequest` builder classes

Use the new builder classes to construct `CheckResources` and `PlanResources` requests.
```php
$request = CheckResourcesRequest::newInstance()
    ->withRequestId(RequestId::generate())
    ->withPrincipal(
        Principal::newInstance("john")
            ->withRole("employee")
            ->withPolicyVersion("20210210")
            ->withAttribute("department", "marketing")
    )
    ->withResourceEntries(
        array(
            ResourceEntry::newInstance("leave_request", "xx125")
                ->withAction("approve")
                ->withAttribute("department", AttributeValue::stringValue("marketing")),

            ResourceEntry::newInstance("leave_request", "xx225")
                ->withAction("defer")
                ->withAttribute("department", AttributeValue::stringValue("marketing"))
        )
    );
```

```php
$request = PlanResourcesRequest::newInstance()
    ->withRequestId(RequestId::generate())
    ->withAction("approve")
    ->withActions(array("create", "delete"))
    ->withPrincipal(
        Principal::newInstance("maggie")
            ->withRole("manager")
            ->withAttribute("department", AttributeValue::stringValue("marketing"))
    )
    ->withResource(
        Resource::newInstance("leave_request", "xx125")
            ->withAttribute("department", AttributeValue::stringValue("marketing"))
    );
```

### Simpler `CerbosClient`

The `checkResources` and `planResources` methods on the `CerbosClient` now accepts only a `CheckResourcesRequest` or 
`PlanResourcesRequest` object respectively.
