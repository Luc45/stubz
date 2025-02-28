<?php
/**
 * Update a product's stock amount.
 *
 * Uses queries rather than update_post_meta so we can do this in one query (to avoid stock issues).
 *
 * @since  3.0.0 this supports set, increase and decrease.
 *
 * @param  int|WC_Product $product        Product ID or product instance.
 * @param  int|null       $stock_quantity Stock quantity.
 * @param  string         $operation      Type of operation, allows 'set', 'increase' and 'decrease'.
 * @param  bool           $updating       If true, the product object won't be saved here as it will be updated later.
 * @return bool|int|null
 */
function wc_update_product_stock($product, $stock_quantity = null, $operation = 'set', $updating = false)
{
}
/**
 * Update a product's stock status.
 *
 * @param int    $product_id Product ID.
 * @param string $status     Status.
 */
function wc_update_product_stock_status($product_id, $status)
{
}
/**
 * When a payment is complete, we can reduce stock levels for items within an order.
 *
 * @since 3.0.0
 * @param int $order_id Order ID.
 */
function wc_maybe_reduce_stock_levels($order_id)
{
}
/**
 * When a payment is cancelled, restore stock.
 *
 * @since 3.0.0
 * @param int $order_id Order ID.
 */
function wc_maybe_increase_stock_levels($order_id)
{
}
/**
 * Reduce stock levels for items within an order, if stock has not already been reduced for the items.
 *
 * @since 3.0.0
 * @param int|WC_Order $order_id Order ID or order instance.
 */
function wc_reduce_stock_levels($order_id)
{
}
/**
 * After stock change events, triggers emails and adds order notes.
 *
 * @since 3.5.0
 * @param WC_Order $order order object.
 * @param array    $changes Array of changes.
 */
function wc_trigger_stock_change_notifications($order, $changes)
{
}
/**
 * Check if a product's stock quantity has reached certain thresholds and trigger appropriate actions.
 *
 * This functionality was moved out of `wc_trigger_stock_change_notifications` in order to decouple it from orders,
 * since stock quantity can also be updated in other ways.
 *
 * @param WC_Product $product        The product whose stock level has changed.
 *
 * @return void
 */
function wc_trigger_stock_change_actions($product)
{
}
/**
 * Increase stock levels for items within an order.
 *
 * @since 3.0.0
 * @param int|WC_Order $order_id Order ID or order instance.
 */
function wc_increase_stock_levels($order_id)
{
}
/**
 * See how much stock is being held in pending orders.
 *
 * @since 3.5.0
 * @param WC_Product $product Product to check.
 * @param integer    $exclude_order_id Order ID to exclude.
 * @return int
 */
function wc_get_held_stock_quantity(WC_Product $product, $exclude_order_id = 0)
{
}
/**
 * Hold stock for an order.
 *
 * @throws ReserveStockException If reserve stock fails.
 *
 * @since 4.1.0
 * @param \WC_Order|int $order Order ID or instance.
 */
function wc_reserve_stock_for_order($order)
{
}
/**
 * Release held stock for an order.
 *
 * @since 4.3.0
 * @param \WC_Order|int $order Order ID or instance.
 */
function wc_release_stock_for_order($order)
{
}
/**
 * Release coupons used for another order.
 *
 * @since 9.5.2
 * @param \WC_Order|int $order Order ID or instance.
 * @param bool          $save Save the order after releasing coupons.
 */
function wc_release_coupons_for_order($order, bool $save = true)
{
}
/**
 * Return low stock amount to determine if notification needs to be sent
 *
 * Since 5.2.0, this function no longer redirects from variation to its parent product.
 * Low stock amount can now be attached to the variation itself and if it isn't, only
 * then we check the parent product, and if it's not there, then we take the default
 * from the store-wide setting.
 *
 * @param  WC_Product $product Product to get data from.
 * @since  3.5.0
 * @return int
 */
function wc_get_low_stock_amount(WC_Product $product)
{
}
