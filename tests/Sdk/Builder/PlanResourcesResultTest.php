<?php

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Api\V1\Engine\PlanResourcesFilter\Expression;
use Cerbos\Api\V1\Engine\PlanResourcesFilter\Expression\Operand;
use Cerbos\Sdk\Builder\PlanResourcesFilter;
use Cerbos\Sdk\Builder\PlanResourcesResult;
use PHPUnit\Framework\TestCase;

// Copyright 2021-2023 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class PlanResourcesResultTest extends TestCase
{
    private string $kind = "leave_request";
    private string $requestId = "XX125";
    private string $action = "approve";
    private string $policyVersion = "v3";
    private string $var = "somevar";
    private string $operator = "and";
    private int $value = 1;

    public function testPlanResourcesResultExpression(): void {
        $expr = new Expression($this->operator);
        $expr->operands[] = new Operand(null, $this->var, null);
        $expr->operands[] = new Operand(null, null, $this->value);
        $condition = new Operand($expr, null, null);

        $result = PlanResourcesResult::newInstance($this->kind, $this->requestId, $this->action, $this->policyVersion)
            ->withFilter(
                PlanResourcesFilter::newInstance()
                    ->withKind($this->kind)
                    ->withCondition($condition)
                    ->toPlanResourcesFilter()
            )
            ->toPlanResourcesResult();

        $this->assertEquals($this->kind, $result->resourceKind, "value of the resource kind is invalid");
        $this->assertEquals($this->requestId, $result->requestId, "value of the request id is invalid");
        $this->assertEquals($this->action, $result->action, "value of the action is invalid");
        $this->assertEquals($this->policyVersion, $result->policyVersion, "value of the policy version is invalid");
        $this->assertNotNull($result->filter, "value of the filter is null");
        $this->assertNotNull($result->filter->condition, "value of the condition is null");
        $this->assertNotNull($result->filter->condition->expression, "value of the expression is null");
        $this->assertEquals($this->operator, $result->filter->condition->expression->operator, "value of the condition > expression > operator is invalid");
        $this->assertEquals($this->var, $result->filter->condition->expression->operands[0]->variable, "value of the condition > expression > operands[0] is invalid");
        $this->assertEquals($this->value, $result->filter->condition->expression->operands[1]->value, "value of the condition > expression > operands[1] is invalid");
    }
}