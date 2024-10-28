<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Erkan\Dan\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc::add(2, 3));
    }
}
