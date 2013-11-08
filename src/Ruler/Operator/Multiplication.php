<?php

/*
 * This file is part of the Ruler package, an OpenSky project.
 *
 * (c) 2011 OpenSky Project Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ruler\Operator;

use Ruler\Value;

/**
 * @author Jordan Raub <jordan@raub.me>
 * @extends ComparisonOperator
 */
class Multiplication extends BinaryOperator implements ArithmeticOperator
{
    /**
     * @param Value $left
     * @param Value $right
     *
     * @return int|string
     */
    public function evaluatePrepared(Value $left, Value $right)
    {
        return $left->multiply($right);
    }
}
