<?php

/**
 * InvalidAction Exception.
 *
 * Used for identifying actions that are invalid in some way.
 *
 * @package ActionScheduler
 */
class ActionScheduler_InvalidActionException extends \InvalidArgumentException implements \ActionScheduler_Exception
{
    /**
     * Create a new exception when the action's schedule cannot be fetched.
     *
     * @param string $action_id The action ID with bad args.
     * @param mixed  $schedule  Passed schedule.
     * @return static
     */
    public static function from_schedule($action_id, $schedule)
    {
    }
    /**
     * Create a new exception when the action's args cannot be decoded to an array.
     *
     * @param string $action_id The action ID with bad args.
     * @param mixed  $args      Passed arguments.
     * @return static
     */
    public static function from_decoding_args($action_id, $args = array())
    {
    }
}