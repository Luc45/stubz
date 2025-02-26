<?php

namespace ;

/**
 * Class ActionScheduler_Versions
 */
class ActionScheduler_Versions
{
    /**
     * ActionScheduler_Versions instance.
     *
     * @var ActionScheduler_Versions
     */
    private static $instance = null;

    /**
     * Versions.
     *
     * @var array<string, callable>
     */
    private $versions = array (
);

    /**
     * Register version's callback.
     *
     * @param string   $version_string          Action Scheduler version.
     * @param callable $initialization_callback Callback to initialize the version.
     */
    public function register($version_string, $initialization_callback)
    {
        // stub
    }

    /**
     * Get all versions.
     */
    public function get_versions()
    {
        // stub
    }

    /**
     * Get latest version registered.
     */
    public function latest_version()
    {
        // stub
    }

    /**
     * Get callback for latest registered version.
     */
    public function latest_version_callback()
    {
        // stub
    }

    /**
     * Get instance.
     *
     * @return ActionScheduler_Versions
     * @codeCoverageIgnore
     */
    public static function instance()
    {
        // stub
    }

    /**
     * Initialize.
     *
     * @codeCoverageIgnore
     */
    public static function initialize_latest_version()
    {
        // stub
    }

}

