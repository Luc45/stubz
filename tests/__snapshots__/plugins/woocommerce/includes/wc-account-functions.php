<?php

/**
 * Returns the url to the lost password endpoint url.
 *
 * @param  string $default_url Default lost password URL.
 * @return string
 */
function wc_lostpassword_url($default_url = '')
{
    // stub
}

/**
 * Get the link to the edit account details page.
 *
 * @return string
 */
function wc_customer_edit_account_url()
{
    // stub
}

/**
 * Get the edit address slug translation.
 *
 * @param  string $id   Address ID.
 * @param  bool   $flip Flip the array to make it possible to retrieve the values ​​from both sides.
 *
 * @return string       Address slug i18n.
 */
function wc_edit_address_i18n($id, $flip = false)
{
    // stub
}

/**
 * Get My Account menu items.
 *
 * @since 2.6.0
 * @return array
 */
function wc_get_account_menu_items()
{
    // stub
}

/**
 * Find current item in account menu.
 *
 * @since 9.3.0
 * @param string $endpoint Endpoint.
 * @return bool
 */
function wc_is_current_account_menu_item($endpoint)
{
    // stub
}

/**
 * Get account menu item classes.
 *
 * @since 2.6.0
 * @param string $endpoint Endpoint.
 * @return string
 */
function wc_get_account_menu_item_classes($endpoint)
{
    // stub
}

/**
 * Get account endpoint URL.
 *
 * @since 2.6.0
 * @param string $endpoint Endpoint.
 * @return string
 */
function wc_get_account_endpoint_url($endpoint)
{
    // stub
}

/**
 * Get My Account > Orders columns.
 *
 * @since 2.6.0
 * @return array
 */
function wc_get_account_orders_columns()
{
    // stub
}

/**
 * Get My Account > Downloads columns.
 *
 * @since 2.6.0
 * @return array
 */
function wc_get_account_downloads_columns()
{
    // stub
}

/**
 * Get My Account > Payment methods columns.
 *
 * @since 2.6.0
 * @return array
 */
function wc_get_account_payment_methods_columns()
{
    // stub
}

/**
 * Get My Account > Payment methods types
 *
 * @since 2.6.0
 * @return array
 */
function wc_get_account_payment_methods_types()
{
    // stub
}

/**
 * Get account orders actions.
 *
 * @since  3.2.0
 * @param  int|WC_Order $order Order instance or ID.
 * @return array
 */
function wc_get_account_orders_actions($order)
{
    // stub
}

/**
 * Get account formatted address.
 *
 * @since  3.2.0
 * @param  string $address_type Type of address; 'billing' or 'shipping'.
 * @param  int    $customer_id  Customer ID.
 *                              Defaults to 0.
 * @return string
 */
function wc_get_account_formatted_address($address_type = 'billing', $customer_id = 0)
{
    // stub
}

/**
 * Returns an array of a user's saved payments list for output on the account tab.
 *
 * @since  2.6
 * @param  array $list         List of payment methods passed from wc_get_customer_saved_methods_list().
 * @param  int   $customer_id  The customer to fetch payment methods for.
 * @return array               Filtered list of customers payment methods.
 */
function wc_get_account_saved_payment_methods_list($list, $customer_id)
{
    // stub
}

/**
 * Controls the output for credit cards on the my account page.
 *
 * @since 2.6
 * @param  array            $item         Individual list item from woocommerce_saved_payment_methods_list.
 * @param  WC_Payment_Token $payment_token The payment token associated with this method entry.
 * @return array                           Filtered item.
 */
function wc_get_account_saved_payment_methods_list_item_cc($item, $payment_token)
{
    // stub
}

/**
 * Controls the output for eChecks on the my account page.
 *
 * @since 2.6
 * @param  array            $item         Individual list item from woocommerce_saved_payment_methods_list.
 * @param  WC_Payment_Token $payment_token The payment token associated with this method entry.
 * @return array                           Filtered item.
 */
function wc_get_account_saved_payment_methods_list_item_echeck($item, $payment_token)
{
    // stub
}

