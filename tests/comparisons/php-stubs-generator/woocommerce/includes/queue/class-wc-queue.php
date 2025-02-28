<?php

/**
 * WC Queue
 *
 * Singleton for managing the WC queue instance.
 *
 * @version 3.5.0
 */
class WC_Queue
{
    /**
     * The single instance of the queue.
     *
     * @var WC_Queue_Interface|null
     */
    protected static $instance = \null;
    /**
     * The default queue class to initialize
     *
     * @var string
     */
    protected static $default_cass = 'WC_Action_Queue';
    /**
     * Single instance of WC_Queue_Interface
     *
     * @return WC_Queue_Interface
     */
    public static final function instance()
    {
    }
    /**
     * Get class to instantiate
     *
     * And make sure 3rd party code has the chance to attach a custom queue class.
     *
     * @return string
     */
    protected static function get_class()
    {
    }
    /**
     * Enforce a WC_Queue_Interface
     *
     * @param WC_Queue_Interface $instance Instance class.
     * @return WC_Queue_Interface
     */
    protected static function validate_instance($instance)
    {
    }
}