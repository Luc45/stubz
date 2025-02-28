<?php
/**
 * Allows to interact with extensions from WCCOM marketplace via CLI.
 *
 * @version 6.8
 * @package WooCommerce
 */
class WC_CLI_COM_Command
{
    const APPLICATION_PASSWORD_SECTION_URL = 'https://woocommerce.com/my-account/#application-passwords';
    /**
     * Registers a commands for managing WooCommerce.com extensions.
     */
    public static function register_commands()
{
}
    /**
     * List extensions owned by the connected site
     *
     * [--format]
     * : If set, the command will use the specified format. Possible values are table, json, csv and yaml. By default the table format will be used.
     *
     * [--fields]
     * : If set, the command will show only the specified fields instead of showing all the fields in the output.
     *
     * ## EXAMPLES
     *
     *     # List extensions owned by the connected site in table format with all the fields
     *     $ wp wc com extension list
     *
     *     # List the product slug of the extension owned by the connected site in csv format
     *     $ wp wc com extension list --format=csv --fields=product_slug
     *
     * @param  array $args  WP-CLI positional arguments.
     * @param  array $assoc_args  WP-CLI associative arguments.
     */
    public static function list_extensions(array $args, array $assoc_args)
{
}
    /**
     * ## OPTIONS
     *
     * [--yes]
     * : Do not prompt for confirmation.
     *
     * ## EXAMPLES
     *
     *     # Disconnect from site.
     *     $ wp wc com disconnect
     *
     *     # Disconnect without prompt for confirmation.
     *     $ wp wc com disconnect --yes
     *
     * @param array $args Positional arguments to include when calling the command.
     * @param array $assoc_args Associative arguments to include when calling the command.
     * @return void
     * @throws \WP_CLI\ExitException If WP_CLI::$capture_exit is true.
     */
    public static function disconnect(array $args, array $assoc_args)
{
}
    /**
     * Connects to WooCommerce.com with application-password.
     *
     * [--password]
     * : If set, password won't be prompt.
     *
     * [--force]
     * : If set, site will be disconnected and a new connection will be forced.
     *
     * ## EXAMPLES
     *
     *     # Connect to WCCOM using password.
     *     $ wp wc com connect
     *
     *     # force connecting to WCCOM even if site is already connected.
     *     $ wp wc com connect --force
     *
     *     # Pass password to command.
     *     $ wp wc com connect --password=PASSWORD
     *
     * @param array $args Positional arguments to include when calling the command.
     * @param array $assoc_args Associative arguments to include when calling the command.
     *
     * @return void
     * @throws \WP_CLI\ExitException If WP_CLI::$capture_exit is true.
     */
    public static function connect(array $args, array $assoc_args)
{
}
    /**
     * We are asking a question and returning an answer as a string.
     *
     * @param  string $question The question being prompt.
     *
     * @return string
     */
    protected static function ask($question)
{
}
}
