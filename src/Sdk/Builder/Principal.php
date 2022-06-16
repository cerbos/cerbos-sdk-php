<?php

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
        $this->principal = new \Cerbos\Api\V1\Engine\Principal($id, null, null, null);
    }

    /**
     * @param string $id
     * @return Principal
     */
    public function newInstance(string $id) : Principal {
        return new Principal($id);
    }

    /**
     * @param string $policyVersion
     * @return Principal
     */
    public function withPolicyVersion(string $policyVersion) : Principal {
        $this->principal->setPolicyVersion($policyVersion);
        return $this;
    }

    /**
     * @param string $role
     * @return $this
     */
    public function withRole(string $role) : Principal {
        $r = $this->principal->getRoles();
        $r[] = $role;
        $this->principal->setRoles($r);
        return $this;
    }

    /**
     * @param array $roles
     * @return $this
     */
    public function withRoles(array $roles) : Principal {
        $r = $this->principal->getRoles();
        $r[] = $roles;
        $this->principal->setRoles($r);
        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return $this
     */
    public function withAttribute(string $key, string $value) : Principal {
        $a = $this->principal->getAttributes();
        $a[$key] = $value;
        $this->principal->setAttributes($a);
        return $this;
    }

    /**
     * @param array $attributes dictionary of string key and values
     * @return $this
     */
    public function withAttributes(array $attributes) : Principal {
        $a = $this->principal->getAttributes();
        $a[] = $attributes;
        $this->principal->setAttributes($a);
        return $this;
    }

    /**
     * @return \Cerbos\Sdk\Principal
     */
    public function toPrincipal() : \Cerbos\Sdk\Principal {
        return $this->principal;
    }
}