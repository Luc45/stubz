<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Contains backend logic for the Marketplace feature.
 */
class Marketplace
{
    public const MARKETPLACE_TAB_SLUG = 'woo';
    /**
     * Class initialization, to be executed when the class is resolved by the container.
     *
     * @internal
     */
    final public function init()
    {
    }
    /**
     * Hook into WordPress on init.
     */
    public function on_init()
    {
    }
    /**
     * Registers report pages.
     */
    public function register_pages()
    {
    }
    /**
     * Get report pages.
     */
    public static function get_marketplace_pages()
    {
    }
    /**
     * Enqueue update script.
     *
     * @param string $hook_suffix The current admin page.
     */
    public function enqueue_scripts($hook_suffix)
    {
    }
    /**
     * Add a Woo Marketplace link to the plugin install action links.
     *
     * @param array $tabs Plugins list tabs.
     * @return array
     */
    public function add_woo_plugin_install_action_link($tabs)
    {
    }
    /**
     * Open the Woo tab when the user clicks on the Woo link in the plugin installer.
     */
    public function maybe_open_woo_tab()
    {
    }
    /**
     * Add styles to the plugin install page.
     */
    public function add_plugins_page_styles()
    {
    }
}
