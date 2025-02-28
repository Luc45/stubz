<?php

namespace Action_Scheduler\Migration;

/**
 * Class Config
 *
 * @package Action_Scheduler\Migration
 *
 * @since 3.0.0
 *
 * A config builder for the ActionScheduler\Migration\Runner class
 */
class Config
{
    /**
     * Config constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get the configured source store.
     *
     * @return ActionScheduler_Store
     * @throws \RuntimeException When source store is not configured.
     */
    public function get_source_store()
    {
    }
    /**
     * Set the configured source store.
     *
     * @param ActionScheduler_Store $store Source store object.
     */
    public function set_source_store(\ActionScheduler_Store $store)
    {
    }
    /**
     * Get the configured source logger.
     *
     * @return ActionScheduler_Logger
     * @throws \RuntimeException When source logger is not configured.
     */
    public function get_source_logger()
    {
    }
    /**
     * Set the configured source logger.
     *
     * @param ActionScheduler_Logger $logger Logger object.
     */
    public function set_source_logger(\ActionScheduler_Logger $logger)
    {
    }
    /**
     * Get the configured destination store.
     *
     * @return ActionScheduler_Store
     * @throws \RuntimeException When destination store is not configured.
     */
    public function get_destination_store()
    {
    }
    /**
     * Set the configured destination store.
     *
     * @param ActionScheduler_Store $store Action store object.
     */
    public function set_destination_store(\ActionScheduler_Store $store)
    {
    }
    /**
     * Get the configured destination logger.
     *
     * @return ActionScheduler_Logger
     * @throws \RuntimeException When destination logger is not configured.
     */
    public function get_destination_logger()
    {
    }
    /**
     * Set the configured destination logger.
     *
     * @param ActionScheduler_Logger $logger Logger object.
     */
    public function set_destination_logger(\ActionScheduler_Logger $logger)
    {
    }
    /**
     * Get flag indicating whether it's a dry run.
     *
     * @return bool
     */
    public function get_dry_run()
    {
    }
    /**
     * Set flag indicating whether it's a dry run.
     *
     * @param bool $dry_run Dry run toggle.
     */
    public function set_dry_run($dry_run)
    {
    }
    /**
     * Get progress bar object.
     *
     * @return ActionScheduler\WPCLI\ProgressBar
     */
    public function get_progress_bar()
    {
    }
    /**
     * Set progress bar object.
     *
     * @param ActionScheduler\WPCLI\ProgressBar $progress_bar Progress bar object.
     */
    public function set_progress_bar(\Action_Scheduler\WP_CLI\ProgressBar $progress_bar)
    {
    }
}