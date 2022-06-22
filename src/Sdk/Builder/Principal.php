<?php

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class Principal
{
    private \Cerbos\Api\V1\Engine\Principal $principal;

    /**
     * @param string $id
     */
    private function __construct(string $id)
    {
        $this->principal = new \Cerbos\Api\V1\Engine\Principal($id);
    }

    /**
     * @param string $id
     * @return Principal
     */
    public static function newInstance(string $id): Principal {
        return new Principal($id);
    }

    /**
     * @param string $id
     * @return $this
     */
    public function withId(string $id): Principal {
        $this->principal->id = $id;
        return $this;
    }

    /**
     * @param string $policyVersion
     * @return $this
     */
    public function withPolicyVersion(string $policyVersion): Principal {
        $this->principal->policyVersion = $policyVersion;
        return $this;
    }

    /**
     * @param string $role
     * @return $this
     */
    public function withRole(string $role): Principal {
        $this->principal->roles[] = $role;
        return $this;
    }

    /**
     * @param array $roles
     * @return $this
     */
    public function withRoles(array $roles): Principal {
        foreach ($roles as $role) {
            $this->principal->roles[] = $role;
        }
        return $this;
    }

    /**
     * @param string $key
     * @param $value
     * @return $this
     */
    public function withAttribute(string $key, $value): Principal {
        $this->principal->attributes[$key] = $value;
        return $this;
    }

    /**
     * @param array $attributes dictionary of string key and values
     * @return $this
     */
    public function withAttributes(array $attributes): Principal {
        foreach ($attributes as $attribute) {
            $this->principal->attributes[] = $attribute;
        }
        return $this;
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function withScope(string $scope): Principal {
        $this->principal->scope = $scope;
        return $this;
    }

    /**
     * @return \Cerbos\Api\V1\Engine\Principal
     */
    public function toPrincipal(): \Cerbos\Api\V1\Engine\Principal {
        return $this->principal;
    }
}