<?php

namespace ;

/**
 * WC_Background_Emailer Class.
 */
class WC_Background_Emailer extends \WC_Background_Process
{
    /**
     * Initiate new background process.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Schedule fallback event.
     */
    protected function schedule_event()
    {
        // stub
    }

    /**
     * Task
     *
     * Override this method to perform any actions required on each
     * queue item. Return the modified item for further processing
     * in the next pass through. Or, return false to remove the
     * item from the queue.
     *
     * @param array $callback Update callback function.
     * @return mixed
     */
    protected function task($callback)
    {
        // stub
    }

    /**
     * Finishes replying to the client, but keeps the process running for further (async) code execution.
     *
     * @see https://core.trac.wordpress.org/ticket/41358 .
     */
    protected function close_http_connection()
    {
        // stub
    }

    /**
     * Save and run queue.
     */
    public function dispatch_queue()
    {
        // stub
    }

    /**
     * Get post args
     *
     * @return array
     */
    protected function get_post_args()
    {
        // stub
    }

    /**
     * Handle
     *
     * Pass each queue item to the task handler, while remaining
     * within server memory and time limit constraints.
     */
    protected function handle()
    {
        // stub
    }

}

