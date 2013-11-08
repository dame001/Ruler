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
 * A NotEqualTo comparison operator.
 *
 * @author Justin Hileman <justin@shopopensky.com>
 * @extends ComparisonOperator
 */
class NotEqualTo extends ComparisonOperator
{
    /**
     * Evaluate whether the given variables are not equal in the current Context.
     *
     * @param Value $left
     * @param Value $right
     *
     * @return bool
     */
    public function evaluatePrepared(Value $left, Value $right)
    {
        return $left->equalTo($right) === false;
    }
}
