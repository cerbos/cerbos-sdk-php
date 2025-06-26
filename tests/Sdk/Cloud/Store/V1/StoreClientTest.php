<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Internal;
use Cerbos\Sdk\Cloud\Store\V1\ChangeDetails\Uploader;
use Cerbos\Sdk\Cloud\Store\V1\File;
use Cerbos\Sdk\Cloud\Store\V1\FileOp;
use Cerbos\Sdk\Cloud\Store\V1\GetFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\ListFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\ModifyFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\ReplaceFilesRequest;
use Cerbos\Sdk\Cloud\Store\V1\StoreClient;
use Exception;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-suppress PossiblyNullReference
 */
final class StoreClientTest extends TestCase
{
    private StoreClient $client;
    private array $expectedFiles =
    [
        "_schemas/principal.json",
        "_schemas/resources/leave_request.json",
        "_schemas/resources/purchase_order.json",
        "_schemas/resources/salary_record.json",

        "derived_roles/common_roles.yaml",
        "derived_roles/derived_roles_01.yaml",
        "derived_roles/derived_roles_02.yaml",
        "derived_roles/derived_roles_03.yaml",
        "derived_roles/derived_roles_04.yaml",
        "derived_roles/derived_roles_05.yaml",

        "export_constants/export_constants_01.yaml",

        "export_variables/export_variables_01.yaml",

        "principal_policies/policy_01.yaml",
        "principal_policies/policy_02.yaml",
        "principal_policies/policy_02_acme.hr.yaml",
        "principal_policies/policy_02_acme.sales.yaml",
        "principal_policies/policy_02_acme.yaml",
        "principal_policies/policy_03.yaml",
        "principal_policies/policy_04.yaml",
        "principal_policies/policy_05.yaml",
        "principal_policies/policy_06.yaml",

        "resource_policies/disabled_policy_01.yaml",
        "resource_policies/policy_01.yaml",
        "resource_policies/policy_02.yaml",
        "resource_policies/policy_03.yaml",
        "resource_policies/policy_04.yaml",
        "resource_policies/policy_04_test.yaml",
        "resource_policies/policy_05.yaml",
        "resource_policies/policy_05_acme.hr.uk.brighton.kemptown.yaml",
        "resource_policies/policy_05_acme.hr.uk.brighton.yaml",
        "resource_policies/policy_05_acme.hr.uk.london.yaml",
        "resource_policies/policy_05_acme.hr.uk.yaml",
        "resource_policies/policy_05_acme.hr.yaml",
        "resource_policies/policy_05_acme.yaml",
        "resource_policies/policy_06.yaml",
        "resource_policies/policy_07.yaml",
        "resource_policies/policy_07_acme.yaml",
        "resource_policies/policy_08.yaml",
        "resource_policies/policy_09.yaml",
        "resource_policies/policy_10.yaml",
        "resource_policies/policy_11.yaml",
        "resource_policies/policy_12.yaml",
        "resource_policies/policy_13.yaml",
        "resource_policies/policy_14.yaml",
        "resource_policies/policy_15.yaml",
        "resource_policies/policy_16.yaml",
        "resource_policies/policy_17.acme.sales.yaml",
        "resource_policies/policy_17.acme.yaml",
        "resource_policies/policy_17.yaml",
        "resource_policies/policy_18.yaml",

        "role_policies/policy_01_acme.hr.uk.brighton.yaml",
        "role_policies/policy_02_acme.hr.uk.brighton.yaml",
        "role_policies/policy_03_acme.hr.uk.yaml",
        "role_policies/policy_04_acme.hr.uk.yaml",
        "role_policies/policy_05_acme.hr.uk.london.yaml",
        "role_policies/policy_06_acme.hr.uk.brighton.kemptown.yaml",

        "tests/policy_04_test.yaml",
        "tests/policy_05_test.yaml",
    ];

    private string $pathToTemporaryPolicyFile;
    private string $pathToStoreContents;
    private string $pathToTemporaryContents;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = $this->hubClient->storeClient();
        
        $pathToTemporaryPolicyFile = realpath(__DIR__ . "/../../../../res/cloud/v1/temporary.yaml");
        $pathToStoreContents = realpath(__DIR__ . "/../../../../res/cloud/v1/store.zip");
        $pathToTemporaryContents = realpath(__DIR__ . "/../../../../res/cloud/v1/temporary.zip");
        if ($pathToTemporaryPolicyFile === false || $pathToStoreContents === false || $pathToTemporaryContents === false) {
            $this->fail('at least one path is false');
        }

        $this->pathToTemporaryPolicyFile = $pathToTemporaryPolicyFile;
        $this->pathToStoreContents = $pathToStoreContents;
        $this->pathToTemporaryContents = $pathToTemporaryContents;
    }

    public function testGetFiles(): void
    {
        $request = GetFilesRequest::newInstance([
            'store_id' => $this->storeId,
            'files' => [$this->expectedFiles[0]]
        ]);

        try {
            $response = $this->client->getFiles($request);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals($this->expectedFiles[0], $response->getFiles()[0], "invalid files");
    }

    public function testListFiles(): void
    {
        $request = ListFilesRequest::newInstance([
            'store_id' => $this->storeId,
        ]);

        try {
            $response = $this->client->listFiles($request);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals($this->expectedFiles, $response->getFiles(), "invalid files");
    }

    public function testModifyFiles(): void
    {
        $initialStoreVersion = ($this->client->ListFiles(ListFilesRequest::newInstance([
            'store_id' => $this->storeId,
        ])))->getStoreVersion();

        $fileContents = file_get_contents($this->pathToTemporaryPolicyFile);
        if($fileContents == false) {
            $this->fail("failed to read file from " . $this->pathToTemporaryPolicyFile);
        }

        $request = ModifyFilesRequest::newInstance([
            'store_id' => $this->storeId,
            'operations' => [
                FileOp::newInstance()
                    ->withAddOrUpdate(
                        File::newInstance([
                            'path' => 'temporary_policies/temporary.yaml',
                            'contents' => $fileContents
                        ])
                    )
            ]
        ])
            ->withChangeDetails(
                 ChangeDetails::newInstance([
                    'description' => 'cerbos-sdk-php/ModifyFiles/Op=AddOrUpdate',
                    'uploader' => Uploader::newInstance(['name' => 'cerbos-sdk-php'])
                ])->withInternal(Internal::newInstance(['source' => 'sdk']))
            );

        try {
            $response = $this->client->modifyFiles($request);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals($initialStoreVersion + 1, $response->getNewStoreVersion(), "invalid store version");

        $request = ModifyFilesRequest::newInstance([
            'store_id' => $this->storeId,
            'operations' => [
                FileOp::newInstance()->withDelete("temporary_policies/temporary.yaml")
            ]
        ])
            ->withChangeDetails(
                ChangeDetails::newInstance([
                    'description' => 'cerbos-sdk-php/ModifyFiles/Op=Delete',
                    'uploader' => Uploader::newInstance(['name' => 'cerbos-sdk-php'])
                ])->withInternal(Internal::newInstance(['source' => 'sdk']))
            );

        try {
            $response = $this->client->modifyFiles($request);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals($initialStoreVersion + 2, $response->getNewStoreVersion(), "invalid store version");
    }

    public function testReplaceFiles(): void
    {
        $initialStoreVersion = ($this->client->ListFiles(ListFilesRequest::newInstance([
            'store_id' => $this->storeId,
        ])))->getStoreVersion();

        $temporaryContents = file_get_contents($this->pathToTemporaryContents);
        if($temporaryContents == false) {
            $this->fail("failed to read file from " . $this->pathToTemporaryContents);
        }

        $request = ReplaceFilesRequest::newInstance([
            'store_id' => $this->storeId
        ])
            ->withChangeDetails(
                ChangeDetails::newInstance([
                    'description' => 'cerbos-sdk-php/ReplaceFiles/With=AddOrUpdate',
                    'uploader' => Uploader::newInstance(['name' => 'cerbos-sdk-php'])
                ])
                ->withInternal(Internal::newInstance(['source' => 'sdk']))
            )
            ->withZippedContents($temporaryContents);

        try {
            $response = $this->client->replaceFiles($request);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals($initialStoreVersion + 1, $response->getNewStoreVersion(), "invalid store version");

        $storeContents = file_get_contents($this->pathToStoreContents);
        if($storeContents == false) {
            $this->fail("failed to read file from " . $this->pathToStoreContents);
        }

        $request = ReplaceFilesRequest::newInstance([
            'store_id' => $this->storeId
        ])
            ->withChangeDetails(
                ChangeDetails::newInstance([
                    'description' => 'cerbos-sdk-php/ReplaceFiles/With=store.zip',
                    'uploader' => Uploader::newInstance(['name' => 'cerbos-sdk-php'])
                ])
                ->withInternal(Internal::newInstance(['source' => 'sdk']))
            )
            ->withZippedContents($storeContents);

        try {
            $response = $this->client->replaceFiles($request);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals($initialStoreVersion + 2, $response->getNewStoreVersion(), "invalid store version");
    }
}
