<?php

/**
 * Class ActionScheduler_Versions
 */
class ActionScheduler_Versions
{
    /**
     * Register version's callback.
     *
     * @param string   $version_string          Action Scheduler version.
     * @param callable $initialization_callback Callback to initialize the version.
     */
    public function register($version_string, $initialization_callback)
    {
    }
    /**
     * Get all versions.
     */
    public function get_versions()
    {
    }
    /**
     * Get latest version registered.
     */
    public function latest_version()
    {
    }
    /**
     * Get callback for latest registered version.
     */
    public function latest_version_callback()
    {
    }
    /**
     * Get instance.
     *
     * @return ActionScheduler_Versions
     * @codeCoverageIgnore
     */
    public static function instance()
    {
    }
    /**
     * Initialize.
     *
     * @codeCoverageIgnore
     */
    public static function initialize_latest_version()
    {
    }
}
