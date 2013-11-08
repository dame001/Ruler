<?php

namespace Ruler\Test\Operator;

use Ruler\Operator;
use Ruler\Context;
use Ruler\Variable;

class MinTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $varA = new Variable('a', 1);

        $op = new Operator\Min($varA);
        $this->assertInstanceOf('Ruler\Proposition', $op);
        $this->assertInstanceOf('Ruler\Operator\ArithmeticOperator', $op);
    }

    /**
     * @dataProvider badData
     * @expectedException \RuntimeException
     * @expectedExceptionMessage min must be given an array of numbers
     */
    public function testInvalidData($data)
    {
        $varA    = new Variable('a', $data);
        $context = new Context();

        $op = new Operator\Min($varA);
        $op->evaluate($context);
    }

    /**
     * @dataProvider minData
     */
    public function testMin($a, $result)
    {
        $varA    = new Variable('a', $a);
        $context = new Context();

        $op = new Operator\Min($varA);
        $this->assertEquals($op->evaluate($context), $result);
    }

    public function minData()
    {
        return array(
            array(array(23, 45, 13), 13),
            array(array(-23, -45, -13), -45),
            array(array(1), 1),
        );
    }

    public function badData()
    {
        return array(
            array("string"),
            array(23),
            array(false),
            array(array(12, "blah")),
        );
    }
}
