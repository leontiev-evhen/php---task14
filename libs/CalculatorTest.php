<?php

/**
 * User: yevhen
 * Date: 10.08.17
 * Time: 12:53
 */
require_once 'Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    private $obj;

    public function setup ()
    {
        $this->obj = new Calculator();
    }

    /**
     * @dataProvider providerPlus
     */
    public function testPlus ($a, $b, $c)
    {
        $this->obj->setFirstNumber($a);
        $this->obj->setSecondNumber($b);
        $this->assertEquals($c, $this->obj->plus());
    }

    public function providerPlus ()
    {
        return [
            [-5, -5, -10],
            [0, 0, 0],
            [-2, 5, 3],
            [2, -5, -3],
            [3, 0, 3],
            [0.5, 0.5, 1],
        ];
    }

    /**
     * @dataProvider providerMinus
     */
    public function testMinus ($a, $b, $c)
    {
        $this->obj->setFirstNumber($a);
        $this->obj->setSecondNumber($b);
        $this->assertEquals($c, $this->obj->minus());
    }

    public function providerMinus ()
    {
        return [
            [-5, -5, 0],
            [0, 0, 0],
            [-2, 5, -7],
            [2, -5, 7],
            [3, 0, 3],
            [0, 3, -3],
            [1.5, 2.5, -1],
        ];
    }

    /**
     * @dataProvider providerMultiply
     */
    public function testMultiply ($a, $b, $c)
    {
        $this->obj->setFirstNumber($a);
        $this->obj->setSecondNumber($b);
        $this->assertEquals($c, $this->obj->multiply());
    }

    public function providerMultiply ()
    {
        return [
            [-5, -5, 25],
            [0, 0, 0],
            [-2, 5, -10],
            [3, 0, 0],
            [1.7, 1, 1.7],
        ];
    }

    /**
     * @dataProvider providerDivision
     */
    public function testDivision ($a, $b, $c)
    {
        $this->obj->setFirstNumber($a);
        $this->obj->setSecondNumber($b);
        $this->assertEquals($c, $this->obj->division());
    }

    public function providerDivision ()
    {
        return [
            [-5, -5, 1],
            [-2, 5, -0.4],
            [0, 3, 0],
            [0, -3, 0],
            [1.7, 1, 1.7],
        ];
    }

    /**
     * @dataProvider providerSqrt
     */
    public function testMySqrt ($a, $b)
    {
        $this->assertEquals($b, $this->obj->mySqrt($a));
    }

    public function providerSqrt ()
    {
        return [
            [25, 5],
            [36, 6],
            [100, 10],
        ];
    }

    public function testPercent ()
    {
        $this->obj->setFirstNumber(100);
        $this->obj->setSecondNumber(20);
        $this->assertEquals(20, $this->obj->percent());
    }

    /**
     * @dataProvider providerMPlus
     */
    public function testMPlus ($a, $b, $c)
    {
        $this->obj->MS($a);
        $this->obj->MR();
        $this->assertEquals($c, $this->obj->MPlus($b));
    }

    public function providerMPlus ()
    {
        return [
            [5, 5, 10],
            [-25, 5, -20],
            [11, -1, 10],
            [24, 0, 24],
            [2.5, 2.5, 5],
            [0, 0, 0],
        ];
    }

    /**
     * @dataProvider providerMMinus
     */
    public function testMMinus ($a, $b, $c)
    {
        $this->obj->MS($a);
        $this->obj->MR();
        $this->assertEquals($c, $this->obj->MMinus($b));
    }

    public function providerMMinus ()
    {
        return [
            [5, 5, 0],
            [-25, 5, -30],
            [11, -1, 12],
            [0, 0, 0],
            [-36, 0, -36],
        ];
    }

    /**
     * @expectedException        Exception
     * @expectedExceptionMessage Operation does not of permission
     */
    public function testCalculatorException()
    {
        throw new Exception('Operation does not of permission');
    }
}
