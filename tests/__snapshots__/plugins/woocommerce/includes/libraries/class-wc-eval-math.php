<?php

namespace ;

/**
 * Class WC_Eval_Math. Supports basic math only (removed eval function).
 *
 * Based on EvalMath by Miles Kaufman Copyright (C) 2005 Miles Kaufmann http://www.twmagic.com/.
 */
class WC_Eval_Math extends \
{
    /**
     * Last error.
     *
     * @var string
     */
    public static $last_error = null;

    /**
     * Variables (and constants).
     *
     * @var array
     */
    public static $v = array(
  'e' => 2.71,
  'pi' => 3.14,
);

    /**
     * User-defined functions.
     *
     * @var array
     */
    public static $f = array(
);

    /**
     * Constants.
     *
     * @var array
     */
    public static $vb = array(
  0 => 'e',
  1 => 'pi',
);

    /**
     * Built-in functions.
     *
     * @var array
     */
    public static $fb = array(
);

    /**
     * Evaluate maths string.
     *
     * @param string  $expr
     * @return mixed
     */
    public static function evaluate($expr)
    {
        // stub
    }

    /**
     * Convert infix to postfix notation.
     *
     * @param  string $expr
     *
     * @return array|string
     */
    private static function nfx($expr)
    {
        // stub
    }

    /**
     * Evaluate postfix notation.
     *
     * @param  mixed $tokens
     * @param  array $vars
     *
     * @return mixed
     */
    private static function pfx($tokens, $vars = array(
))
    {
        // stub
    }

    /**
     * Trigger an error, but nicely, if need be.
     *
     * @param  string $msg
     *
     * @return bool
     */
    private static function trigger($msg)
    {
        // stub
    }

    /**
     * Prints the file name, function name, and
     * line number which called your function
     * (not this function, then one that  called
     * it to begin with)
     */
    private static function debugPrintCallingFunction()
    {
        // stub
    }

}

namespace ;

/**
 * Class WC_Eval_Math_Stack.
 */
class WC_Eval_Math_Stack extends \
{
    /**
     * Stack array.
     *
     * @var array
     */
    public $stack = array(
);

    /**
     * Stack counter.
     *
     * @var integer
     */
    public $count = 0;

    /**
     * Push value into stack.
     *
     * @param  mixed $val
     */
    public function push($val)
    {
        // stub
    }

    /**
     * Pop value from stack.
     *
     * @return mixed
     */
    public function pop()
    {
        // stub
    }

    /**
     * Get last value from stack.
     *
     * @param  int $n
     *
     * @return mixed
     */
    public function last($n = 1)
    {
        // stub
    }

}

