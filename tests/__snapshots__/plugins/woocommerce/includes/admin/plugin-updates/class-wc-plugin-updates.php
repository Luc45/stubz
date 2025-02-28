<?php
/**
 * WC_Admin_Plugin_Updates Class.
 */
class WC_Plugin_Updates
{
    const VERSION_REQUIRED_HEADER = 'WC requires at least';
    const VERSION_TESTED_HEADER = 'WC tested up to';
    /**
     * The version for the update to WooCommerce.
     *
     * @var string
     */
    protected $new_version = '';
    /**
     * Array of plugins lacking testing with the major version.
     *
     * @var array
     */
    protected $major_untested_plugins = array();
    /**
     * Common JS for initializing and managing thickbox-based modals.
     */
    protected function generic_modal_js()
{
}
    /**
     * Get the inline warning notice for major version updates.
     *
     * @return string
     */
    protected function get_extensions_inline_warning_major()
{
}
    /**
     * Get the warning notice for the modal window.
     *
     * @return string
     */
    protected function get_extensions_modal_warning()
{
}
    /**
     * Get installed plugins that have a tested version lower than the input version.
     *
     * In case of testing major version compatibility and if current WC version is >= major version part
     * of the $new_version, no plugins are returned, even if they don't explicitly declare compatibility
     * with the $new_version.
     *
     * @param string $new_version WooCommerce version to test against.
     * @param string $release 'major', 'minor', or 'none'.
     * @return array of plugin info arrays
     */
    public function get_untested_plugins($new_version, $release)
{
}
    /**
     * Get plugins that have a valid value for a specific header.
     *
     * @param string $header Plugin header to search for.
     * @return array Array of plugins that contain the searched header.
     */
    protected function get_plugins_with_header($header)
{
}
    /**
     * Get plugins which "maybe" are for WooCommerce.
     *
     * @return array of plugin info arrays
     */
    protected function get_plugins_for_woocommerce()
{
}
}
