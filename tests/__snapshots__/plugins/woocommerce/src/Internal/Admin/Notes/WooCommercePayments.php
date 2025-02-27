<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * WooCommerce_Payments
 */
class WooCommercePayments
{
    const NOTE_NAME = 'wc-admin-woocommerce-payments';

    const PLUGIN_SLUG = 'woocommerce-payments';

    const PLUGIN_FILE = 'woocommerce-payments/woocommerce-payments.php';

    /**
     * Attach hooks.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Maybe add a note on WooCommerce Payments for US based sites older than a week without the plugin installed.
     */
    public static function possibly_add_note()
    {
        // stub
    }

    /**
     * Add a note about WooCommerce Payments.
     *
     * @return Note
     */
    public static function get_note()
    {
        // stub
    }

    /**
     * Check if the WooCommerce Payments plugin is active or installed.
     */
    protected static function is_installed()
    {
        // stub
    }

    /**
     * Install and activate WooCommerce Payments.
     *
     * @return boolean Whether the plugin was successfully activated.
     */
    private function install_and_activate_wcpay()
    {
        // stub
    }

    /**
     * Install & activate WooCommerce Payments plugin, and redirect to setup.
     */
    public function install_on_action()
    {
        // stub
    }

}