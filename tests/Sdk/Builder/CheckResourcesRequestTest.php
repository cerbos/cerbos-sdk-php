<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Sdk\Builder\AuxData;
use Cerbos\Sdk\Builder\CheckResourcesRequest;
use Cerbos\Sdk\Builder\Principal;
use Cerbos\Sdk\Builder\ResourceEntry;
use Cerbos\Sdk\Utility\RequestId;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PossiblyNullReference
 */
final class CheckResourcesRequestTest extends TestCase
{
    private string $token = "eyJhbGciOiJFUzM4NCIsImtpZCI6IjE5TGZaYXRFZGc4M1lOYzVyMjNndU1KcXJuND0iLCJ0eXAiOiJKV1QifQ.eyJhdWQiOlsiY2VyYm9zLWp3dC10ZXN0cyJdLCJjdXN0b21BcnJheSI6WyJBIiwiQiIsIkMiXSwiY3VzdG9tSW50Ijo0MiwiY3VzdG9tTWFwIjp7IkEiOiJBQSIsIkIiOiJCQiIsIkMiOiJDQyJ9LCJjdXN0b21TdHJpbmciOiJmb29iYXIiLCJleHAiOjE5NTAyNzc5MjYsImlzcyI6ImNlcmJvcy10ZXN0LXN1aXRlIn0._nCHIsuFI3wczeuUv_xjSwaVnIQUdYA9sGf_jVsrsDWloLs3iPWDaA1bXpuIUJVsi8-G6qqdrPI0cOBxEocg1NCm8fyD9T_3hsZV0fYWon_Je6Kl93a3JIW3S6kbvjsL";
    private string $keySetId = "123";

    public function testWithAuxData(): void {
        try {
            $crq = CheckResourcesRequest::newInstance()
                ->withRequestId(RequestId::generate())
                ->withPrincipal(
                    Principal::newInstance("john")
                        ->withPolicyVersion("20210210")
                )
                ->withResourceEntry(
                    ResourceEntry::newInstance("leave_request", "john")
                        ->withPolicyVersion("20210210")
                )
                ->withAuxData(AuxData::withJwt($this->token, $this->keySetId))
                ->toCheckResourcesRequest();
        } catch (Exception $e) {
            /**
             * @psalm-suppress UndefinedClass
             */
            $this->fail($e->getMessage());
        }

        $this->assertEquals($this->token, $crq->getAuxData()->getJwt()->getToken(), "invalid token");
        $this->assertEquals($this->keySetId, $crq->getAuxData()->getJwt()->getKeySetId(), "invalid keySetId");
    }

    public function testWithIncludeMeta(): void {
        try {
            $crq = CheckResourcesRequest::newInstance()
                ->withRequestId(RequestId::generate())
                ->withPrincipal(
                    Principal::newInstance("john")
                        ->withPolicyVersion("20210210")
                )
                ->withResourceEntry(
                    ResourceEntry::newInstance("leave_request", "john")
                        ->withPolicyVersion("20210210")
                )
                ->withIncludeMeta(true)
                ->toCheckResourcesRequest();
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertTrue($crq->getIncludeMeta(), "invalid includeMeta");
    }

    public function testWithPrincipal(): void {
        try {
            $crq = CheckResourcesRequest::newInstance()
                ->withRequestId(RequestId::generate())
                ->withPrincipal(
                    Principal::newInstance("john")
                        ->withPolicyVersion("20210210")
                )
                ->withResourceEntry(
                    ResourceEntry::newInstance("leave_request", "john")
                        ->withPolicyVersion("20210210")
                )
                ->toCheckResourcesRequest();
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertNotNull($crq->getPrincipal(), "principal is null");
        $this->assertEquals("john", $crq->getPrincipal()->getId(), "invalid id");
        $this->assertEquals("20210210", $crq->getPrincipal()->getPolicyVersion(), "invalid policyVersion");
    }

    public function testWithResourceEntry(): void {
        try {
            $crq = CheckResourcesRequest::newInstance()
                ->withRequestId(RequestId::generate())
                ->withPrincipal(
                    Principal::newInstance("john")
                        ->withPolicyVersion("20210210")
                )
                ->withResourceEntry(
                    ResourceEntry::newInstance("leave_request", "john")
                        ->withPolicyVersion("20210210")
                )
                ->toCheckResourcesRequest();
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertNotNull($crq->getResources()[0], "resources[0] is null");
        $this->assertEquals("leave_request", $crq->getResources()[0]->getResource()->getKind(), "invalid kind");
        $this->assertEquals("john", $crq->getResources()[0]->getResource()->getId(), "invalid id");
        $this->assertEquals("20210210", $crq->getResources()[0]->getResource()->getPolicyVersion(), "invalid policyVersion");
    }

    public function testWithResourceEntries(): void {
        try {
            $crq = CheckResourcesRequest::newInstance()
                ->withRequestId(RequestId::generate())
                ->withPrincipal(
                    Principal::newInstance("john")
                        ->withPolicyVersion("20210210")
                )
                ->withResourceEntries(
                    array(
                        ResourceEntry::newInstance("leave_request", "john")
                            ->withPolicyVersion("20210210"),
                        ResourceEntry::newInstance("leave_request2", "john2")
                            ->withPolicyVersion("20210210v2")
                    )
                )
                ->toCheckResourcesRequest();
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertNotNull($crq->getResources()[0], "resources[0] is null");
        $this->assertNotNull($crq->getResources()[1], "resources[1] is null");

        $this->assertEquals("leave_request", $crq->getResources()[0]->getResource()->getKind(), "invalid kind");
        $this->assertEquals("john", $crq->getResources()[0]->getResource()->getId(), "invalid id");
        $this->assertEquals("20210210", $crq->getResources()[0]->getResource()->getPolicyVersion(), "invalid policyVersion");

        $this->assertEquals("leave_request2", $crq->getResources()[1]->getResource()->getKind(), "invalid kind");
        $this->assertEquals("john2", $crq->getResources()[1]->getResource()->getId(), "invalid id");
        $this->assertEquals("20210210v2", $crq->getResources()[1]->getResource()->getPolicyVersion(), "invalid policyVersion");
    }

    public function testWithRequestId(): void {
        try {
            $crq = CheckResourcesRequest::newInstance()
                ->withRequestId("123")
                ->withPrincipal(
                    Principal::newInstance("john")
                        ->withPolicyVersion("20210210")
                )
                ->withResourceEntry(
                    ResourceEntry::newInstance("leave_request", "john")
                        ->withPolicyVersion("20210210")
                )
                ->toCheckResourcesRequest();
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals("123", $crq->getRequestId(), "invalid requestId");
    }
}
