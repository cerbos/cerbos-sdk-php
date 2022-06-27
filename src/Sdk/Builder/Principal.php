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
     * @param string|null $id
     * @return Principal
     */
    public function withId(?string $id): Principal {
        if ($id == null) return $this;
        $this->principal->id = $id;
        return $this;
    }

    /**
     * @param string|null $policyVersion
     * @return Principal
     */
    public function withPolicyVersion(?string $policyVersion): Principal {
        if ($policyVersion == null) return $this;
        $this->principal->policyVersion = $policyVersion;
        return $this;
    }

    /**
     * @param string|null $role
     * @return Principal
     */
    public function withRole(?string $role): Principal {
        if ($role == null) return $this;
        $this->principal->roles[] = $role;
        return $this;
    }

    /**
     * @param string[]|null $roles
     * @return Principal
     */
    public function withRoles(?array $roles): Principal {
        if ($roles == null) return $this;
        foreach ($roles as $role) {
            $this->principal->roles[] = $role;
        }
        return $this;
    }

    /**
     * @param string|null $key
     * @param $value
     * @return Principal
     */
    public function withAttribute(?string $key, $value): Principal {
        if ($key == null || $value == null) return $this;
        $this->principal->attributes[$key] = $value;
        return $this;
    }

    /**
     * @param array|null $attributes dictionary of string key and values
     * @return Principal
     */
    public function withAttributes(?array $attributes): Principal {
        if ($attributes == null) return $this;
        foreach ($attributes as $attribute) {
            $this->principal->attributes[] = $attribute;
        }
        return $this;
    }

    /**
     * @param string|null $scope
     * @return Principal
     */
    public function withScope(?string $scope): Principal {
        if ($scope == null) return $this;
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