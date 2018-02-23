<?php

namespace test\test;

use PHPUnit\Framework\TestCase;
use test\src\ArithmeticCalculator;

class ArithmeticCalculatorTest extends Testcase
{
    /**
     * @var ArithmeticCalculator
     */
    private $calculator;
    
    /**
     * @before
     */
    public function setUpCalculator()
    {
       $this->calculator = new ArithmeticCalculator();
    }

    /**
     * @param $a
     * @param $b
     * @param $excepted
     * 
     * @dataProvider provideAdd
     */
    public function testAdd($a, $b, $excepted)
    {
        $result = $this->calculator->add($a, $b);
        $this->assertEquals($excepted, $result, 'La somme de '.$a.' plus '.$b.' doit faire '.$excepted);


    }

    public function testProduct()
    {
        $result = $this->calculator->product(75, 2);
        $this->assertEquals(150, $result, 'Le produit de 75 fois 2 doit faire 150');
    }

    public function provideAdd()
    {
        return [
            [3, 3, 6],
            [40, 75, 115]
        ];
    }
}