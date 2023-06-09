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
  
$checkResourcesResult = $client->checkResources($request);
$resultEntry = $checkResourcesResult->find("xx125");

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
                    
$checkResourcesResult = $client->checkResources($request);

$resultEntry = $checkResourcesResult->find("xx125");
if ($resultEntry->isAllowed("approve")) { // returns true if `approve` action is allowed
    // ...
}

$resultEntry = $checkResourcesResult->find("xx225");
if ($resultEntry->isAllowed("defer")) { // returns true if `defer` action is allowed
    // ...
}
```

## Plan Resources API

```php
$request = PlanResourcesRequest::newInstance()
    ->withRequestId(RequestId::generate())
    ->withAction("approve")
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

$planResourcesResult = $this->client->planResources($request);
if ($planResourcesResult->isAlwaysAllowed()) {
    // ...
}
else if ($planResourcesResult->isAlwaysDenied()) {
    // ...
}
else {
    // ...
}
```

# Changes from `v0.1.x`

This part of the `README.md` describes the changes made between PHP SDK `v0.1.x` version and this version.

Since `v0.1.x` version(s) used HTTP API and this version use the gRPC API, there are a couple of steps to take.

## gRPC

`gRPC` extension required to be installed on the development and production environment.

There is a [nice guide](https://cloud.google.com/php/grpc) from Google describing how to download and enable the `gRPC`
extension.

## Differences between SDK API v0.1.x

### PHP version requirements

Due to some of the dependencies, the SDK only supports PHP `>=8.1`.

### Simpler `CerbosClientBuilder`

Thanks to migration from HTTP API to the gRPC API, `CerbosClientBuilder` became much simpler.

Now, `CerbosClientBuilder` only expects `hostname` as a parameter;
```php
$client = CerbosClientBuilder::newInstance("localhost:3593")
    ->withPlaintext(true)
    ->build();
```

### Renamed `ResourceAction` to `ResourceEntry`

Since in the original protobuf definitions pairing of a `resource` and one or more `action(s)` are named `ResourceEntry`,
the name `ResourceAction` changed to be `ResourceEntry`.

### New `AttributeValue` builder class

Since in the original protobuf definitions the attribute values are represented with `.google.protobuf.Value`, a builder
class `AttributeValue` was required to improve the user experience.

Creating a bool value;
```php
$val = AttributeValue::boolValue(true);
```

Creating a string value;
```php
$val = AttributeValue::stringValue("marketing");
```

### New `CheckResourcesRequest` and `PlanResourcesRequest` builder classes

Creating the requests are much easier now with the `CheckResourcesRequest` and `PlanResourcesRequest` builder classes.

Here is an example for the `CheckResourcesRequest`;
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

Here is an example for the `PlanResourcesRequest`;
```php
$request = PlanResourcesRequest::newInstance()
    ->withRequestId(RequestId::generate())
    ->withAction("approve")
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

The `CerbosClient` has two functions `checkResources` and `planResources`. These functions were both expecting a couple 
of parameters. To improve the user experience, these two functions now expects only a `CheckResourcesRequest` or 
`PlanResourcesRequest`, respectively.
