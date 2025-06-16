<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

namespace Cerbos\Test\Sdk\Cloud\Store\V1;

use Cerbos\Sdk\Cloud\Store\V1\GetFilesRequest;
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

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = $this->hubClient->storeClient();
    }

    public function testGetFiles(): void
    {
        $request = GetFilesRequest::newInstance()
            ->withStoreId($this->storeId)
            ->withFiles([$this->expectedFiles[0]]);

        try {
            $response = $this->client->getFiles($request);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals($this->expectedFiles[0], $response->getFiles()[0], "invalid files");
    }
}
