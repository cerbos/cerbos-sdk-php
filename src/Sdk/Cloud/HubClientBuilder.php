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
    private Credentials $credentials;
    private const string DEFAULT_HOSTNAME = "api.cerbos.cloud";

    /**
     * @param string $hostname
     * @param string $clientId
     * @param string $clientSecret
     */
    private function __construct(string $hostname, string $clientId, string $clientSecret)
    {
        if (empty($hostname)) {
            throw new Exception("hostname must be specified");
        }

        if (empty($clientId) || empty($clientSecret)) {
            throw new Exception("clientId and clientSecret must be specified");
        }

        $this->hostname = $hostname;
        $this->credentials = new Credentials($clientId, $clientSecret);
    }

    /**
     * @return HubClientBuilder
     * @throws Exception when clientId or clientSecret is not specified
     */
    public static function fromEnv(): HubClientBuilder
    {
        $hostname = HubClientBuilder::getEnvOrDefault("CERBOS_HUB_API_ENDPOINT", self::DEFAULT_HOSTNAME);
        $clientId = HubClientBuilder::getEnvOrDefault("CERBOS_HUB_CLIENT_ID", "");
        $clientSecret = HubClientBuilder::getEnvOrDefault("CERBOS_HUB_CLIENT_SECRET", "");

        return new HubClientBuilder($hostname, $clientId, $clientSecret);
    }

    /**
     * @param string $clientId
     * @param string $clientSecret
     * @return $this
     */
    public static function fromCredentials(string $clientId, string $clientSecret): HubClientBuilder
    {
        $hostname = HubClientBuilder::getEnvOrDefault("CERBOS_HUB_API_ENDPOINT", self::DEFAULT_HOSTNAME);

        return new HubClientBuilder($hostname, $clientId, $clientSecret);
    }

    /**
     * @param string $environment environment variable name
     * @param string $default default value to be returned if the environment variable is not set
     * @return string
     */
    public static function getEnvOrDefault(string $environment, string $default): string
    {
        $value = getenv($environment);
        if (is_string($value) && !empty($value)) {
            return $value;
        }

        return $default;
    }

    /**
     * @return HubClient
     * @throws Exception
     */
    public function build(): HubClient
    {
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
