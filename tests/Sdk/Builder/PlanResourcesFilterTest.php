<?php

namespace Cerbos\Test\Sdk\Builder;

use Cerbos\Api\V1\Engine\PlanResourcesFilter\Expression;
use Cerbos\Api\V1\Engine\PlanResourcesFilter\Expression\Operand;
use Cerbos\Sdk\Builder\PlanResourcesFilter;
use PHPUnit\Framework\TestCase;

// Copyright 2021-2022 Zenauth Ltd.
// SPDX-License-Identifier: Apache-2.0

class PlanResourcesFilterTest extends TestCase
{
    private string $kind = "leave_request";
    private string $var = "somevar";
    private string $operator = "and";
    private int $value = 1;

    public function testPlanResourcesFilterExpression(): void {
        $expr = new Expression($this->operator);
        $expr->operands[] = new Operand(null, $this->var, null);
        $expr->operands[] = new Operand(null, null, $this->value);
        $condition = new Operand($expr, null, null);

        $filter = PlanResourcesFilter::newInstance()
            ->withKind($this->kind)
            ->withCondition($condition)
            ->toPlanResourcesFilter();

        $this->assertEquals($this->kind, $filter->kind, "value of the kind is invalid");
        $this->assertNotNull($filter->condition, "value of the condition is null");
        $this->assertNotNull($filter->condition->expression, "value of the expression is null");
        $this->assertEquals($this->operator, $filter->condition->expression->operator, "value of the condition > expression > operator is invalid");
        $this->assertEquals($this->var, $filter->condition->expression->operands[0]->variable, "value of the condition > expression > operands[0] is invalid");
        $this->assertEquals($this->value, $filter->condition->expression->operands[1]->value, "value of the condition > expression > operands[1] is invalid");
    }

    public function testPlanResourcesFilterVariable(): void {
        $condition = new Operand(null, $this->var, null);

        $filter = PlanResourcesFilter::newInstance()
        ->withKind($this->kind)
        ->withCondition($condition)
        ->toPlanResourcesFilter();

        $this->assertEquals($this->kind, $filter->kind, "value of the kind is invalid");
        $this->assertNotNull($filter->condition, "condition is null");
        $this->assertEquals($this->var, $filter->condition->variable, "value of the condition > variable is invalid");
    }

    public function testPlanResourcesFilterValue(): void {
        $condition = new Operand(null, null, $this->value);

        $filter = PlanResourcesFilter::newInstance()
            ->withKind($this->kind)
            ->withCondition($condition)
            ->toPlanResourcesFilter();

        $this->assertEquals($this->kind, $filter->kind, "value of the kind is invalid");
        $this->assertNotNull($filter->condition, "condition is null");
        $this->assertEquals($this->value, $filter->condition->value, "value of the condition > value is invalid");
    }
}