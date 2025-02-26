<?php

namespace ;

/**
 * Class ActionScheduler
 *
 * @codeCoverageIgnore
 */
abstract class ActionScheduler
{
    /**
     * Plugin file path.
     *
     * @var string
     */
    private static $plugin_file = '';

    /**
     * ActionScheduler_ActionFactory instance.
     *
     * @var ActionScheduler_ActionFactory
     */
    private static $factory = null;

    /**
     * Data store is initialized.
     *
     * @var bool
     */
    private static $data_store_initialized = false;

    /**
     * Factory.
     */
    public static function factory()
    {
        // stub
    }

    /**
     * Get Store instance.
     */
    public static function store()
    {
        // stub
    }

    /**
     * Get Lock instance.
     */
    public static function lock()
    {
        // stub
    }

    /**
     * Get Logger instance.
     */
    public static function logger()
    {
        // stub
    }

    /**
     * Get QueueRunner instance.
     */
    public static function runner()
    {
        // stub
    }

    /**
     * Get AdminView instance.
     */
    public static function admin_view()
    {
        // stub
    }

    /**
     * Get the absolute system path to the plugin directory, or a file therein
     *
     * @static
     * @param string $path Path relative to plugin directory.
     * @return string
     */
    public static function plugin_path($path)
    {
        // stub
    }

    /**
     * Get the absolute URL to the plugin directory, or a file therein
     *
     * @static
     * @param string $path Path relative to plugin directory.
     * @return string
     */
    public static function plugin_url($path)
    {
        // stub
    }

    /**
     * Autoload.
     *
     * @param string $class Class name.
     */
    public static function autoload($class)
    {
        // stub
    }

    /**
     * Initialize the plugin
     *
     * @static
     * @param string $plugin_file Plugin file path.
     */
    public static function init($plugin_file)
    {
        // stub
    }

    /**
     * Check whether the AS data store has been initialized.
     *
     * @param string $function_name The name of the function being called. Optional. Default `null`.
     * @return bool
     */
    public static function is_initialized($function_name = null)
    {
        // stub
    }

    /**
     * Determine if the class is one of our abstract classes.
     *
     * @since 3.0.0
     *
     * @param string $class The class name.
     *
     * @return bool
     */
    protected static function is_class_abstract($class)
    {
        // stub
    }

    /**
     * Determine if the class is one of our migration classes.
     *
     * @since 3.0.0
     *
     * @param string $class The class name.
     *
     * @return bool
     */
    protected static function is_class_migration($class)
    {
        // stub
    }

    /**
     * Determine if the class is one of our WP CLI classes.
     *
     * @since 3.0.0
     *
     * @param string $class The class name.
     *
     * @return bool
     */
    protected static function is_class_cli($class)
    {
        // stub
    }

    /**
     * Clone.
     */
    public final function __clone()
    {
        // stub
    }

    /**
     * Wakeup.
     */
    public final function __wakeup()
    {
        // stub
    }

    /**
     * Construct.
     */
    private final function __construct()
    {
        // stub
    }

    /**
     * Get DateTime object.
     *
     * @param null|string $when     Date/time string.
     * @param string      $timezone Timezone string.
     */
    public static function get_datetime_object($when = null, $timezone = 'UTC')
    {
        // stub
    }

    /**
     * Issue deprecated warning if an Action Scheduler function is called in the shutdown hook.
     *
     * @param string $function_name The name of the function being called.
     * @deprecated 3.1.6.
     */
    public static function check_shutdown_hook($function_name)
    {
        // stub
    }

}

