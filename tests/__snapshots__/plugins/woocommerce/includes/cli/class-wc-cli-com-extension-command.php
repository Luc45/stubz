<?php
/**
 * Allows to interact with extensions from WCCOM marketplace via CLI.
 *
 * @version 6.8
 * @package WooCommerce
 */
class WC_CLI_COM_Extension_Command extends \Plugin_Command
{
    /**
     * Registers a commands for managing WooCommerce.com extensions.
     */
    public static function register_commands()
{
}
    /**
     * Installs one or more plugins from wccom marketplace.
     *
     * ## OPTIONS
     *
     * <extension>...
     * : One or more plugins to install. Accepts a plugin slug.
     *
     * [--force]
     * : If set, the command will overwrite any installed version of the plugin, without prompting
     * for confirmation.
     *
     * [--activate]
     * : If set, the plugin will be activated immediately after install.
     *
     * [--activate-network]
     * : If set, the plugin will be network activated immediately after install
     *
     * [--insecure]
     * : Retry downloads without certificate validation if TLS handshake fails. Note: This makes the request vulnerable to a MITM attack.
     *
     * ## EXAMPLES
     *
     *     # Install the latest version from WooCommerce.com and activate
     *     $ wp wc com extension install automatewoo --activate
     *     Downloading install package from http://s3.amazonaws.com/bucketname/automatewoo.zip?AWSAccessKeyId=123&Expires=456&Signature=abcdef......
     *     Using cached file '/home/vagrant/.wp-cli/cache/plugin/automatewoo.zip'...
     *     Unpacking the package...
     *     Installing the plugin...
     *     Plugin installed successfully.
     *     Activating 'automatewoo'...
     *     Plugin 'automatewoo' activated.
     *     Success: Installed 1 of 1 plugins.
     *
     *     # Forcefully re-install an installed plugin
     *     $ wp wc com extension install automatewoo --force
     *     Downloading install package from http://s3.amazonaws.com/bucketname/automatewoo.zip?AWSAccessKeyId=123&Expires=456&Signature=abcdef...
     *     Unpacking the package...
     *     Installing the plugin...
     *     Removing the old version of the plugin...
     *     Plugin updated successfully
     *     Success: Installed 1 of 1 plugins.
     *
     * @param array $args WP-CLI positional arguments.
     * @param array $assoc_args WP-CLI associative arguments.
     */
    public function install($args, $assoc_args)
{
}
}
