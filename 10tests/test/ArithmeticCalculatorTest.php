<?php

namespace test\test;

use PHPUnit\Framework\TestCase;
use test\src\ArithmeticCalculator;

class ArithmeticCalculatorTest extends Testcase
{
    public function testAdd()
    {
        $calculator = new ArithmeticCalculator();
        $result = $calculator->add(3, 4);
        $this->assertEquals(7, $result, 'La somme de 3 plus 4 doit faire 7');
    }
}