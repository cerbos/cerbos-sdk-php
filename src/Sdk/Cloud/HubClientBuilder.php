<?php

// Copyright 2021-2025 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Cloud;

use Cerbos\Sdk\Cloud\Apikey\V1\ApiKeyClient;
use Exception;
use Grpc\ChannelCredentials;

final class HubClientBuilder
{
    private string $hostname;
    private bool $plaintext;
    private ?string $caCertificate;

    /**
     * @param string $hostname
     */
    private function __construct(string $hostname) {
        $this->hostname = $hostname;
        $this->plaintext = false;
        $this->caCertificate = null;
    }

    /**
     * @param string $hostname
     * @return HubClientBuilder
     */
    public static function newInstance(string $hostname): HubClientBuilder {
        return new HubClientBuilder($hostname);
    }

    /**
     * @param bool $plaintext
     * @return HubClientBuilder
     */
    public function withPlaintext(bool $plaintext): HubClientBuilder {
        $this->plaintext = $plaintext;
        return $this;
    }

    /**
     * @param string $caCertificate
     * @return $this
     */
    public function withCaCertificate(string $caCertificate): HubClientBuilder {
        $this->caCertificate = $caCertificate;
        return $this;
    }

    /**
     * @return HubClient
     * @throws Exception
     */
    public function build(): HubClient {
        if ($this->plaintext) {
            $credentials = ChannelCredentials::createInsecure();
        }
        else if (!is_null($this->caCertificate)) {
            $credentials = ChannelCredentials::createSsl(
                $this->caCertificate
            );
        }
        else {
            /**
             * @psalm-suppress TooFewArguments
             */
            $credentials = ChannelCredentials::createSsl();
        }

        $apiKeyClient = new ApiKeyClient(
            new \Cerbos\Cloud\Apikey\V1\ApiKeyServiceClient(
                $this->hostname,
                [
                    'credentials' => $credentials,
                ]
            )
        );

        return new HubClient($apiKeyClient);
    }
}
