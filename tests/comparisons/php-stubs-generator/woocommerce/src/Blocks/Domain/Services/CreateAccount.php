<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class implementing new create account emails used for order processing via the Block Based Checkout.
 */
class CreateAccount
{
    /**
     * Constructor.
     *
     * @param Package $package An instance of (Woo Blocks) Package.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
    {
    }
    /**
     * Init - register handlers for WooCommerce core email hooks.
     */
    public function init()
    {
    }
    /**
     * Trigger new account email.
     * This is intended as a replacement to WC_Emails::customer_new_account(),
     * with a set password link instead of emailing the new password in email
     * content.
     *
     * @param int   $customer_id       The ID of the new customer account.
     * @param array $new_customer_data Assoc array of data for the new account.
     */
    public function customer_new_account($customer_id = 0, array $new_customer_data = array())
    {
    }
}