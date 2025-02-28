<?php

/**
 * WC_Privacy_Erasers Class.
 */
class WC_Privacy_Erasers
{
    /**
     * Finds and erases customer data by email address.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array An array of personal data in name value pairs
     */
    public static function customer_data_eraser($email_address, $page)
    {
    }
    /**
     * Finds and erases data which could be used to identify a person from WooCommerce data associated with an email address.
     *
     * Orders are erased in blocks of 10 to avoid timeouts.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array An array of personal data in name value pairs
     */
    public static function order_data_eraser($email_address, $page)
    {
    }
    /**
     * Finds and removes customer download logs by email address.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array An array of personal data in name value pairs
     */
    public static function download_data_eraser($email_address, $page)
    {
    }
    /**
     * Remove personal data specific to WooCommerce from an order object.
     *
     * Note; this will hinder order processing for obvious reasons!
     *
     * @param WC_Order $order Order object.
     */
    public static function remove_order_personal_data($order)
    {
    }
    /**
     * Finds and erases customer tokens by email address.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array An array of personal data in name value pairs
     */
    public static function customer_tokens_eraser($email_address, $page)
    {
    }
}
