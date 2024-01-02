<?php

// Copyright 2021-2024 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

declare(strict_types=1);

namespace Cerbos\Sdk\Builder;

class Principal
{
    private \Cerbos\Engine\V1\Principal $principal;

    /**
     * @param string $id
     */
    private function __construct(string $id)
    {
        $this->principal = (new \Cerbos\Engine\V1\Principal())->setId($id);
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
        $this->principal->setId($id);
        return $this;
    }

    /**
     * @param string $policyVersion
     * @return $this
     */
    public function withPolicyVersion(string $policyVersion): Principal {
        $this->principal->setPolicyVersion($policyVersion);
        return $this;
    }

    /**
     * @param string $role
     * @return $this
     */
    public function withRole(string $role): Principal {
        $newRoles = array();
        foreach ($this->principal->getRoles()->getIterator() as $r) {
            $newRoles[] = $r;
        }
        $newRoles[] = $role;

        $this->principal->setRoles($newRoles);
        return $this;
    }

    /**
     * @param string[] $roles
     * @return $this
     */
    public function withRoles(array $roles): Principal {
        $newRoles = array();
        foreach ($this->principal->getRoles()->getIterator() as $r) {
            $newRoles[] = $r;
        }

        foreach ($roles as $r) {
            $newRoles[] = $r;
        }

        $this->principal->setRoles($newRoles);
        return $this;
    }

    /**
     * @param string $key
     * @param AttributeValue $value
     * @return $this
     */
    public function withAttribute(string $key, AttributeValue $value): Principal {
        $newAttrs = array();
        foreach ($this->principal->getAttr()->getIterator() as $k => $v) {
            $newAttrs[$k] = $v;
        }
        $newAttrs[$key] = $value->toValue();

        $this->principal->setAttr($newAttrs);
        return $this;
    }

    /**
     * @param array<string, AttributeValue> $attributes
     * @return $this
     */
    public function withAttributes(array $attributes): Principal {
        $newAttrs = array();
        foreach ($this->principal->getAttr()->getIterator() as $k => $v) {
            $newAttrs[$k] = $v;
        }

        foreach ($attributes as $k => $v) {
            $newAttrs[$k] = $v->toValue();
        }

        $this->principal->setAttr($newAttrs);
        return $this;
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function withScope(string $scope): Principal {
        $this->principal->setScope($scope);
        return $this;
    }

    /**
     * @return \Cerbos\Engine\V1\Principal
     */
    public function toPrincipal(): \Cerbos\Engine\V1\Principal {
        return $this->principal;
    }
}
