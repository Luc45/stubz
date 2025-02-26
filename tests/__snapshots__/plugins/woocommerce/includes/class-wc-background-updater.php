<?php

namespace ;

/**
 * WC_Background_Updater Class.
 */
class WC_Background_Updater extends \WC_Background_Process
{
    /**
     * Initiate new background process.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Dispatch updater.
     *
     * Updater will still run via cron job if this fails for any reason.
     */
    public function dispatch()
    {
        // stub
    }

    /**
     * Handle cron healthcheck
     *
     * Restart the background process if not already running
     * and data exists in the queue.
     */
    public function handle_cron_healthcheck()
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
     * Is the updater running?
     *
     * @return boolean
     */
    public function is_updating()
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
     * @param string $callback Update callback function.
     * @return string|bool
     */
    protected function task($callback)
    {
        // stub
    }

    /**
     * Complete
     *
     * Override if applicable, but ensure that the below actions are
     * performed, or, call parent::complete().
     */
    protected function complete()
    {
        // stub
    }

    /**
     * See if the batch limit has been exceeded.
     *
     * @return bool
     */
    public function is_memory_exceeded()
    {
        // stub
    }

}

