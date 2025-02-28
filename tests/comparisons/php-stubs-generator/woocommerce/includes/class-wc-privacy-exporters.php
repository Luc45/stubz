<?php

/**
 * WC_Privacy_Exporters Class.
 */
class WC_Privacy_Exporters
{
    /**
     * Finds and exports customer data by email address.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @return array An array of personal data in name value pairs
     */
    public static function customer_data_exporter($email_address)
    {
    }
    /**
     * Finds and exports data which could be used to identify a person from WooCommerce data associated with an email address.
     *
     * Orders are exported in blocks of 10 to avoid timeouts.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array An array of personal data in name value pairs
     */
    public static function order_data_exporter($email_address, $page)
    {
    }
    /**
     * Finds and exports customer download logs by email address.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @throws Exception When WC_Data_Store validation fails.
     * @return array An array of personal data in name value pairs
     */
    public static function download_data_exporter($email_address, $page)
    {
    }
    /**
     * Get personal data (key/value pairs) for a user object.
     *
     * @since 3.4.0
     * @param WP_User $user user object.
     * @throws Exception If customer cannot be read/found and $data is set to WC_Customer class.
     * @return array
     */
    protected static function get_customer_personal_data($user)
    {
    }
    /**
     * Get personal data (key/value pairs) for an order object.
     *
     * @since 3.4.0
     * @param WC_Order $order Order object.
     * @return array
     */
    protected static function get_order_personal_data($order)
    {
    }
    /**
     * Get personal data (key/value pairs) for a download object.
     *
     * @since 3.4.0
     * @param WC_Order $download Download object.
     * @return array
     */
    protected static function get_download_personal_data($download)
    {
    }
    /**
     * Finds and exports payment tokens by email address for a customer.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array An array of personal data in name value pairs
     */
    public static function customer_tokens_exporter($email_address, $page)
    {
    }
}
