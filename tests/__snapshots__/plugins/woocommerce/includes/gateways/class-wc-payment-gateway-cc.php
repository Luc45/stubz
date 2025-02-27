<?php

/**
 * Credit Card Payment Gateway
 *
 * @since       2.6.0
 * @package     WooCommerce\Classes
 */
class WC_Payment_Gateway_CC
{
    /**
     * Builds our payment fields area - including tokenization fields for logged
     * in users, and the actual payment fields.
     *
     * @since 2.6.0
     */
    public function payment_fields()
    {
        // stub
    }

    /**
     * Output field name HTML
     *
     * Gateways which support tokenization do not require names - we don't want the data to post to the server.
     *
     * @since  2.6.0
     * @param  string $name Field name.
     * @return string
     */
    public function field_name($name)
    {
        // stub
    }

    /**
     * Outputs fields for entering credit card information.
     *
     * @since 2.6.0
     */
    public function form()
    {
        // stub
    }

}
