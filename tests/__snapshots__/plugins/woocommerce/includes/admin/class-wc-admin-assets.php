<?php

/**
 * WC_Admin_Assets Class.
 */
class WC_Admin_Assets
{
    /**
     * Hook in tabs.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Enqueue styles.
     */
    public function admin_styles()
    {
        // stub
    }

    /**
     * Enqueue scripts.
     */
    public function admin_scripts()
    {
        // stub
    }

    /**
     * Enqueue a script in the block editor.
     * Similar to `WCAdminAssets::register_script()` but without enqueuing unnecessary dependencies.
     *
     * @return void
     */
    private function enqueue_block_editor_script($script_path_name, $script_name)
    {
        // stub
    }

    /**
     * Enqueue block editor assets.
     *
     * @return void
     */
    public function enqueue_block_editor_assets()
    {
        // stub
    }

    /**
     * Helper function to determine whether the current screen is an order edit screen.
     *
     * @param string $screen_id Screen ID.
     *
     * @return bool Whether the current screen is an order edit screen.
     */
    private function is_order_meta_box_screen($screen_id)
    {
        // stub
    }

}
