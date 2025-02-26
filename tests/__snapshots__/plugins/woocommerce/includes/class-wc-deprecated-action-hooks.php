<?php

namespace ;

/**
 * Handles deprecation notices and triggering of legacy action hooks.
 */
class WC_Deprecated_Action_Hooks extends \WC_Deprecated_Hooks
{
    /**
     * Array of deprecated hooks we need to handle. Format of 'new' => 'old'.
     *
     * @var array
     */
    protected $deprecated_hooks = array(
  'woocommerce_new_order_item' => 
  array(
    0 => 'woocommerce_order_add_shipping',
    1 => 'woocommerce_order_add_coupon',
    2 => 'woocommerce_order_add_tax',
    3 => 'woocommerce_order_add_fee',
    4 => 'woocommerce_add_shipping_order_item',
    5 => 'woocommerce_add_order_item_meta',
    6 => 'woocommerce_add_order_fee_meta',
  ),
  'woocommerce_update_order_item' => 
  array(
    0 => 'woocommerce_order_edit_product',
    1 => 'woocommerce_order_update_coupon',
    2 => 'woocommerce_order_update_shipping',
    3 => 'woocommerce_order_update_fee',
    4 => 'woocommerce_order_update_tax',
  ),
  'woocommerce_new_payment_token' => 'woocommerce_payment_token_created',
  'woocommerce_new_product_variation' => 'woocommerce_create_product_variation',
  'woocommerce_order_details_after_order_table_items' => 'woocommerce_order_items_table',
  'woocommerce_settings_advanced_page_options' => 
  array(
    0 => 'woocommerce_settings_checkout_page_options',
    1 => 'woocommerce_settings_account_page_options',
  ),
  'woocommerce_settings_advanced_page_options_end' => 
  array(
    0 => 'woocommerce_settings_checkout_page_options_end',
    1 => 'woocommerce_settings_account_page_options_end',
  ),
  'woocommerce_settings_advanced_page_options_after' => 
  array(
    0 => 'woocommerce_settings_checkout_page_options_after',
    1 => 'woocommerce_settings_account_page_options_after',
  ),
);

    /**
     * Array of versions on each hook has been deprecated.
     *
     * @var array
     */
    protected $deprecated_version = array(
  'woocommerce_order_add_shipping' => '3.0.0',
  'woocommerce_order_add_coupon' => '3.0.0',
  'woocommerce_order_add_tax' => '3.0.0',
  'woocommerce_order_add_fee' => '3.0.0',
  'woocommerce_add_shipping_order_item' => '3.0.0',
  'woocommerce_add_order_item_meta' => '3.0.0',
  'woocommerce_add_order_fee_meta' => '3.0.0',
  'woocommerce_order_edit_product' => '3.0.0',
  'woocommerce_order_update_coupon' => '3.0.0',
  'woocommerce_order_update_shipping' => '3.0.0',
  'woocommerce_order_update_fee' => '3.0.0',
  'woocommerce_order_update_tax' => '3.0.0',
  'woocommerce_payment_token_created' => '3.0.0',
  'woocommerce_create_product_variation' => '3.0.0',
  'woocommerce_order_items_table' => '3.0.0',
  'woocommerce_settings_checkout_page_options' => '3.4.0',
  'woocommerce_settings_account_page_options' => '3.4.0',
  'woocommerce_settings_checkout_page_options_end' => '3.4.0',
  'woocommerce_settings_account_page_options_end' => '3.4.0',
  'woocommerce_settings_checkout_page_options_after' => '3.4.0',
  'woocommerce_settings_account_page_options_after' => '3.4.0',
);

    /**
     * Hook into the new hook so we can handle deprecated hooks once fired.
     *
     * @param string $hook_name Hook name.
     */
    public function hook_in($hook_name)
    {
        // stub
    }

    /**
     * If the old hook is in-use, trigger it.
     *
     * @param  string $new_hook          New hook name.
     * @param  string $old_hook          Old hook name.
     * @param  array  $new_callback_args New callback args.
     * @param  mixed  $return_value      Returned value.
     * @return mixed
     */
    public function handle_deprecated_hook($new_hook, $old_hook, $new_callback_args, $return_value)
    {
        // stub
    }

    /**
     * Fire off a legacy hook with it's args.
     *
     * @param  string $old_hook          Old hook name.
     * @param  array  $new_callback_args New callback args.
     * @return mixed
     */
    protected function trigger_hook($old_hook, $new_callback_args)
    {
        // stub
    }

}

