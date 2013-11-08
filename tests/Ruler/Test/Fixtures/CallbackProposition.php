<?php

namespace Ruler\Test\Fixtures;

use Ruler\Proposition;
use Ruler\Context;

class CallbackProposition implements Proposition
{
    private $callback;

    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    public function evaluate(Context $context)
    {
        return call_user_func($this->callback, $context);
    }
}
