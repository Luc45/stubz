<?php

namespace ;

/**
 * WC_Background_Process class.
 */
abstract class WC_Background_Process
{
    /**
     * Is queue empty.
     *
     * @return bool
     */
    protected function is_queue_empty()
    {
        // stub
    }

    /**
     * Get batch.
     *
     * @return stdClass Return the first batch from the queue.
     */
    protected function get_batch()
    {
        // stub
    }

    /**
     * See if the batch limit has been exceeded.
     *
     * @return bool
     */
    protected function batch_limit_exceeded()
    {
        // stub
    }

    /**
     * Handle.
     *
     * Pass each queue item to the task handler, while remaining
     * within server memory and time limit constraints.
     */
    protected function handle()
    {
        // stub
    }

    /**
     * Get memory limit.
     *
     * @return int
     */
    protected function get_memory_limit()
    {
        // stub
    }

    /**
     * Schedule cron healthcheck.
     *
     * @param array $schedules Schedules.
     * @return array
     */
    public function schedule_cron_healthcheck($schedules)
    {
        // stub
    }

    /**
     * Delete all batches.
     *
     * @return WC_Background_Process
     */
    public function delete_all_batches()
    {
        // stub
    }

    /**
     * Kill process.
     *
     * Stop processing queue items, clear cronjob and delete all batches.
     */
    public function kill_process()
    {
        // stub
    }

}

