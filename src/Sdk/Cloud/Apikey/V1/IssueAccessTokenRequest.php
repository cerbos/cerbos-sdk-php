<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud\Apikey\V1;

use Exception;

/**
 * @internal
 */
final class IssueAccessTokenRequest
{
    private \Cerbos\Cloud\Apikey\V1\IssueAccessTokenRequest $request;

    /**
     * @param array $data {
     *     @type string $client_id
     *     @type string $client_secret
     * }
     */
    private function __construct(array $data)
    {
        $this->request = new \Cerbos\Cloud\Apikey\V1\IssueAccessTokenRequest($data);
    }

    /**
     * @param array $data {
     *     @type string $client_id
     *     @type string $client_secret
     * }
     * @return IssueAccessTokenRequest
     */
    public static function newInstance(array $data): IssueAccessTokenRequest
    {
        return new IssueAccessTokenRequest($data);
    }

    /**
     * @return \Cerbos\Cloud\Apikey\V1\IssueAccessTokenRequest
     * @throws Exception
     */
    public function toIssueAccessTokenRequest(): \Cerbos\Cloud\Apikey\V1\IssueAccessTokenRequest
    {
        return $this->request;
    }
}
