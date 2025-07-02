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

## Cerbos

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
  
$checkResourcesResponse = $client->checkResources($request);
$resultEntry = $checkResourcesResponse->find("xx125");

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

### Plan Resources API

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

> [!NOTE]  
> Cerbos PDP v0.44.0 and onwards support specifying multiple actions with the following syntax: 
> ```php
> ->withActions(array("create", "delete"))
> ``` 

## Cerbos Hub

### Creating a gRPC client

```php
use Cerbos\Sdk\Cloud\HubClientBuilder;

$hubClient = HubClientBuilder::fromEnv() // Gets clientId and clientSecret from environment variables CERBOS_HUB_CLIENT_ID and CERBOS_HUB_CLIENT_SECRET.
    ->build();

$storeClient = $hubClient->storeClient();
```

### GetFiles API

```php
use Cerbos\Sdk\Cloud\Store\V1\GetFilesRequest;

$request = GetFilesRequest::newInstance(
    $storeId,
    "resource_policies/leave_request.yaml",
    "resource_policies/purchase_order.yaml"
);

$response = $storeClient->getFiles($request);
```

### ListFiles API

```php
use Cerbos\Sdk\Cloud\Store\V1\FileFilter;
use Cerbos\Sdk\Cloud\Store\V1\ListFilesRequest;

$request = ListFilesRequest::newInstance($storeId);

$requestWithFilter = ListFilesRequest::withFilter(
    $storeId,
    FileFilter::pathContains(self::something)
);

$response = $storeClient->listFiles($request);
$filteredResponse = $storeClient->listFiles($requestWithFilter);
```

### ModifyFiles API

```php
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Internal;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Uploader;
use Cerbos\Sdk\Cloud\Store\V1\FileOp;
use Cerbos\Sdk\Cloud\Store\V1\ModifyFilesRequest;

$path = __DIR__ . "./cerbos/policies/leave_request.yaml";
$realPath = realpath($path);
$fileContents = file_get_contents($realPath);

$requestAddOrUpdate = ModifyFilesRequest::withChangeDetails(
    $storeId,
    ChangeDetails::internal(
        'myApp/ModifyFiles/Op=AddOrUpdate',
        Uploader::newInstance('myApp'),
        Internal::newInstance('sdk')
    ),
    FileOp::addOrUpdate('policies/leave_request.yaml', $fileContents)
);

$requestDelete = ModifyFilesRequest::withChangeDetails(
    $storeId,
    ChangeDetails::internal(
        'myApp/ModifyFiles/Op=Delete',
        Uploader::newInstance('myApp'),
        Internal::newInstance('sdk')
    ),
    FileOp::delete('policies/leave_request.yaml')
);

$responseAddOrUpdate = $storeClient->modifyFiles($requestAddOrUpdate);
$responseDelete = $storeClient->modifyFiles($requestDelete);
```

### ReplaceFiles API

```php
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Internal;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Uploader;
use Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest;

$path = __DIR__ . "./cerbos/policies.zip";
$realPath = realpath($path);
$fileContents = file_get_contents($realPath);

$request = ReplaceFilesRequest::withZippedContents(
    $storeId,
    $fileContents,
    null,
    ChangeDetails::internal(
        'myApp/ReplaceFiles/With=policies.zip',
        Uploader::newInstance('myApp'),
        Internal::newInstance('sdk')
    )
);

$response = $storeClient->replaceFiles($request);
```
