<?php

/**
 * Class WC_Eval_Math. Supports basic math only (removed eval function).
 *
 * Based on EvalMath by Miles Kaufman Copyright (C) 2005 Miles Kaufmann http://www.twmagic.com/.
 */
class WC_Eval_Math
{
    /**
     * Last error.
     *
     * @var string
     */
    public static $last_error = \null;
    /**
     * Variables (and constants).
     *
     * @var array
     */
    public static $v = array('e' => 2.71, 'pi' => 3.14);
    /**
     * User-defined functions.
     *
     * @var array
     */
    public static $f = array();
    /**
     * Constants.
     *
     * @var array
     */
    public static $vb = array('e', 'pi');
    /**
     * Built-in functions.
     *
     * @var array
     */
    public static $fb = array();
    /**
     * Evaluate maths string.
     *
     * @param string  $expr
     * @return mixed
     */
    public static function evaluate($expr)
    {
    }
}
/**
 * Class WC_Eval_Math_Stack.
 */
class WC_Eval_Math_Stack
{
    /**
     * Stack array.
     *
     * @var array
     */
    public $stack = array();
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
    }
    /**
     * Pop value from stack.
     *
     * @return mixed
     */
    public function pop()
    {
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
    }
}
