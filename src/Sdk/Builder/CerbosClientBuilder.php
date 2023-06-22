<?php

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

use Cerbos\Sdk\CerbosClient;
use Cerbos\Svc\V1\CerbosServiceClient;
use Exception;
use Grpc\ChannelCredentials;

class CerbosClientBuilder
{
    private string $hostname;
    private bool $plaintext;
    private string $playgroundInstanceId;
    private ?string $caCertificate;
    private ?string $tlsCertificate;
    private ?string $tlsKey;

    /**
     * @param string $hostname
     */
    private function __construct(string $hostname) {
        $this->hostname = $hostname;
        $this->plaintext = false;
        $this->playgroundInstanceId = "";
        $this->caCertificate = null;
        $this->tlsCertificate = null;
        $this->tlsKey = null;
    }

    /**
     * @param string $hostname
     * @return CerbosClientBuilder
     */
    public static function newInstance(string $hostname): CerbosClientBuilder {
        return new CerbosClientBuilder($hostname);
    }

    /**
     * @param bool $plaintext
     * @return CerbosClientBuilder
     */
    public function withPlaintext(bool $plaintext): CerbosClientBuilder {
        $this->plaintext = $plaintext;
        return $this;
    }

    /**
     * @param string $caCertificate
     * @return $this
     */
    public function withCaCertificate(string $caCertificate): CerbosClientBuilder {
        $this->caCertificate = $caCertificate;
        return $this;
    }

    /**
     * @param string $tlsCertificate
     * @return $this
     */
    public function withTlsCertificate(string $tlsCertificate): CerbosClientBuilder {
        $this->tlsCertificate = $tlsCertificate;
        return $this;
    }

    /**
     * @param string $tlsKey
     * @return $this
     */
    public function withTlsKey(string $tlsKey): CerbosClientBuilder {
        $this->tlsKey = $tlsKey;
        return $this;
    }

    /**
     * @param string $playgroundInstanceId
     * @return $this
     */
    public function withPlayground(string $playgroundInstanceId): CerbosClientBuilder {
        $this->playgroundInstanceId = $playgroundInstanceId;
        return $this;
    }

    /**
     * @return CerbosClient
     * @throws Exception
     */
    public function build(): CerbosClient {
        if ($this->plaintext) {
            if ($this->playgroundInstanceId != "") {
                throw new Exception("cannot use a plaintext connection to interact with the Cerbos Playground");
            }

            $credentials = ChannelCredentials::createInsecure();
        }
        else if (!is_null($this->caCertificate)) {
            if (!is_null($this->tlsCertificate) && !is_null($this->tlsKey)) {
                $credentials = ChannelCredentials::createSsl(
                    $this->caCertificate,
                    $this->tlsKey,
                    $this->tlsCertificate
                );
            }
            else {
                $credentials = ChannelCredentials::createSsl(
                    $this->caCertificate
                );
            }
        }
        else {
            /**
             * @psalm-suppress TooFewArguments
             */
            $credentials = ChannelCredentials::createSsl();
        }

        $csc = new CerbosServiceClient(
            $this->hostname,
            [
                'credentials' => $credentials,
            ]
        );

        return new CerbosClient($csc, $this->playgroundInstanceId);
    }
}
