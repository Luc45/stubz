<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * WooCommerce_Payments
 */
class WooCommercePayments
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;

    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-admin-woocommerce-payments';
    /**
     * Name of the note for use in the database.
     */
    public const PLUGIN_SLUG = 'woocommerce-payments';
    /**
     * Name of the note for use in the database.
     */
    public const PLUGIN_FILE = 'woocommerce-payments/woocommerce-payments.php';
    /**
     * Attach hooks.
     */
    public function __construct()
    {
    }
    /**
     * Maybe add a note on WooCommerce Payments for US based sites older than a week without the plugin installed.
     */
    public static function possibly_add_note()
    {
    }
    /**
     * Add a note about WooCommerce Payments.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
    /**
     * Check if the WooCommerce Payments plugin is active or installed.
     */
    protected static function is_installed()
    {
    }
    /**
     * Install & activate WooCommerce Payments plugin, and redirect to setup.
     */
    public function install_on_action()
    {
    }
}
