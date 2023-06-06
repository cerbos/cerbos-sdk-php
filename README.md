Cerbos PHP SDK
===============

[![Latest Stable Version](http://poser.pugx.org/cerbos/cerbos-sdk-php/v)](https://packagist.org/packages/cerbos/cerbos-sdk-php)
[![Total Downloads](http://poser.pugx.org/cerbos/cerbos-sdk-php/downloads)](https://packagist.org/packages/cerbos/cerbos-sdk-php)
[![License](http://poser.pugx.org/cerbos/cerbos-sdk-php/license)](https://packagist.org/packages/cerbos/cerbos-sdk-php)

PHP client library for the [Cerbos](https://github.com/cerbos/cerbos) open source access control solution. This library
includes gRPC client for accessing the Cerbos PDP.

Find out more about Cerbos at https://cerbos.dev and read the documentation at https://docs.cerbos.dev.

Installation
-------------

You can install the SDK via [Composer](https://getcomposer.org/). Run the following command:
```bash
composer require cerbos/cerbos-sdk-php
```

Examples
--------

### Creating a gRPC client

```php
$client = CerbosClientBuilder::newInstance($this->host)
    ->withPlaintext(true)
    ->build();
```

### Check a single principal and resource

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

### Check a single principal and multiple resource & action pairs

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

### Plan Resources API

```php
$request = newInstance()
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
