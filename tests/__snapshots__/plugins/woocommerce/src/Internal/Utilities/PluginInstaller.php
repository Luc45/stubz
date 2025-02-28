<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * This class allows installing a plugin programmatically.
 *
 * Information about plugins installed in that way will be stored in a 'woocommerce_autoinstalled_plugins' option,
 * and a notice will be shown under the plugin name in the plugins list indicating that it was automatically
 * installed (these notices can be disabled with the 'woocommerce_show_autoinstalled_plugin_notices' hook).
 *
 * Currently it's only possible to install new plugins, not to upgrade or reinstall already installed plugins.
 *
 * The 'upgrader_process_complete' hook is used to remove the autoinstall information from any plugin that is later
 * upgraded or reinstalled by any means other than the usage of this class.
 */
class PluginInstaller
{
    /**
     * Flag indicating that a plugin install is in progress, so the upgrader_process_complete hook must be ignored.
     *
     * @var bool
     */
    private bool $installing_plugin = false;

    /**
     * Attach hooks used by the class.
     */
    public function register()
{
}
    /**
     * Programmatically installs a plugin. Upgrade/reinstall of already existing plugins is not supported.
     * The plugin source must be the WordPress.org plugins directory.
     *
     * $metadata can contain anything, but the following keys are recognized by the code that renders the notice
     * in the plugins list:
     *
     * - 'installed_by': defaults to 'WooCommerce' if not present.
     * - 'info_link': if present, a "More information" link will be included in the notice.
     *
     * If 'installed_by' is supplied and it's not 'WooCommerce' (case-insensitive), an exception will be thrown
     * if the code calling this method is not in a WooCommerce core file (in 'includes' or in 'src').
     *
     * Information about plugins successfully installed with this method will be kept in an option named
     * 'woocommerce_autoinstalled_plugins'. Keys will be the plugin name and values will be associative arrays
     * with these keys: 'plugin_name', 'version', 'date' and 'metadata' (same meaning as in the returned array).
     *
     * A log entry will be created with the result of the process and all the installer messages
     * (source: 'plugin_auto_installs'). In multisite this log entry will be created on each site.
     *
     * The returned array will contain the following (only 'install_ok' and 'messages' if the installation fails):
     *
     * - 'install_ok', a boolean.
     * - 'messages', all the messages generated by the installer.
     * - 'plugin_name', in the form of 'directory/file.php' (taken from the instance of PluginInstaller used).
     * - 'version', of the plugin that has been installed.
     * - 'date', ISO-formatted installation date.
     * - 'metadata', as supplied (except the 'plugin_name' key) and only if not empty.
     *
     * If the plugin is already in the process of being installed (can happen in multisite), the returned array
     * will contain only one key: 'already_installing', with a value of true.
     *
     * @param string $plugin_url URL or file path of the plugin to install.
     * @param array  $metadata Metadata to store if the installation succeeds.
     * @return array Information about the installation result.
     * @throws \InvalidArgumentException Source doesn't start with 'https://downloads.wordpress.org/', or installer name is 'WooCommerce' but caller is not WooCommerce core code.
     */
    public function install_plugin(string $plugin_url, array $metadata = array()): array
{
}
    /**
     * Core version of 'install_plugin' (it doesn't handle the $installing_plugin flag).
     *
     * @param string $plugin_url URL or file path of the plugin to install.
     * @param array  $metadata Metadata to store if the installation succeeds.
     * @return array Information about the installation result.
     * @throws \InvalidArgumentException Source doesn't start with 'https://downloads.wordpress.org/', or installer name is 'WooCommerce' but caller is not WooCommerce core code.
     */
    private function install_plugin_core(string $plugin_url, array $metadata): array
{
}
    /**
     * Check if WooCommerce is installed and active in the current blog.
     * This is useful for multisite installs when a blog other than the one running this code is selected with 'switch_to_blog'.
     *
     * @return bool True if WooCommerce is installed and active in the current blog, false otherwise.
     */
    private static function woocommerce_is_active_in_current_site(): bool
{
}
    /**
     * Handler for the 'plugin_list_rows' hook, it will display a notice under the name of the plugins
     * that have been installed using this class (unless the 'woocommerce_show_autoinstalled_plugin_notices' filter
     * returns false) in the plugins list page.
     *
     * @param string $plugin_file Name of the plugin.
     * @param array  $plugin_data Plugin data.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_plugin_list_rows($plugin_file, $plugin_data)
{
}
    /**
     * Handler for the 'upgrader_process_complete' hook. It's used to remove the autoinstalled plugin information
     * for plugins that are upgraded or reinstalled manually (or more generally, by using any install method
     * other than this class).
     *
     * @param \WP_Upgrader $upgrader The upgrader class that has performed the plugin upgrade/reinstall.
     * @param array        $hook_extra Extra information about the upgrade process.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_upgrader_process_complete(WP_Upgrader $upgrader, array $hook_extra)
{
}
}