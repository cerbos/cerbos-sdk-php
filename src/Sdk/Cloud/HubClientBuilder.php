<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud;

use Cerbos\Sdk\Cloud\Apikey\V1\ApiKeyClient;
use Cerbos\Sdk\Cloud\Apikey\V1\Authenticator;
use Cerbos\Sdk\Cloud\Store\V1\StoreClient;
use Exception;

final class HubClientBuilder
{
    private string $hostname;
    private ?Credentials $credentials;

    /**
     * @param string $hostname
     */
    private function __construct(string $hostname) {
        $this->hostname = $hostname;
        $this->credentials = null;
    }

    /**
     * @param string $hostname
     * @return HubClientBuilder
     */
    public static function newInstance(string $hostname): HubClientBuilder {
        return new HubClientBuilder($hostname);
    }

    /**
     * @param string $clientId
     * @param string $clientSecret
     * @return $this
     */
    public function withCredentials(string $clientId, string $clientSecret): HubClientBuilder {
        $this->credentials = new Credentials($clientId, $clientSecret);
        return $this;
    }

    /**
     * @return HubClient
     * @throws Exception
     */
    public function build(): HubClient {
        if (is_null($this->credentials)) {
            throw new Exception("credentials must be specified");
        }

        $channel = new \Grpc\Channel(
            $this->hostname,
            [
                'credentials' => \Grpc\ChannelCredentials::createSsl()
            ]
        );
        
        $apiKeyClient = new ApiKeyClient(
            new \Cerbos\Cloud\Apikey\V1\ApiKeyServiceClient(
                $this->hostname,
                [],
                $channel
            )
        );

        $authenticator = new Authenticator($apiKeyClient, $this->credentials);

        return new HubClient(
            new StoreClient(
                new \Cerbos\Cloud\Store\V1\CerbosStoreServiceClient(
                    $this->hostname,
                    [],
                    $channel
                ),
                $authenticator
            )
        );
    }
}
