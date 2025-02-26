<?php

namespace ;

/**
 * WC_Deprecated_Hooks class maps old actions and filters to new ones. This is the base class for handling those deprecated hooks.
 *
 * Based on the WCS_Hook_Deprecator class by Prospress.
 */
abstract class WC_Deprecated_Hooks extends \
{
    /**
     * Array of deprecated hooks we need to handle.
     *
     * @var array
     */
    protected $deprecated_hooks = array(
);

    /**
     * Array of versions on each hook has been deprecated.
     *
     * @var array
     */
    protected $deprecated_version = array(
);

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Hook into the new hook so we can handle deprecated hooks once fired.
     *
     * @param string $hook_name Hook name.
     */
    public abstract function hook_in($hook_name);

    /**
     * Get old hooks to map to new hook.
     *
     * @param  string $new_hook New hook name.
     * @return array
     */
    public function get_old_hooks($new_hook)
    {
        // stub
    }

    /**
     * If the hook is Deprecated, call the old hooks here.
     */
    public function maybe_handle_deprecated_hook()
    {
        // stub
    }

    /**
     * If the old hook is in-use, trigger it.
     *
     * @param  string $new_hook          New hook name.
     * @param  string $old_hook          Old hook name.
     * @param  array  $new_callback_args New callback args.
     * @param  mixed  $return_value      Returned value.
     * @return mixed
     */
    public abstract function handle_deprecated_hook($new_hook, $old_hook, $new_callback_args, $return_value);

    /**
     * Get deprecated version.
     *
     * @param string $old_hook Old hook name.
     * @return string
     */
    protected function get_deprecated_version($old_hook)
    {
        // stub
    }

    /**
     * Display a deprecated notice for old hooks.
     *
     * @param string $old_hook Old hook.
     * @param string $new_hook New hook.
     */
    protected function display_notice($old_hook, $new_hook)
    {
        // stub
    }

    /**
     * Fire off a legacy hook with it's args.
     *
     * @param  string $old_hook          Old hook name.
     * @param  array  $new_callback_args New callback args.
     * @return mixed
     */
    protected abstract function trigger_hook($old_hook, $new_callback_args);

}

