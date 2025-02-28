<?php

/**
 * WC Grouped Product Data Store: Stored in CPT.
 *
 * @version  3.0.0
 */
class WC_Product_Grouped_Data_Store_CPT extends \WC_Product_Data_Store_CPT
{
    /**
     * Helper method that updates all the post meta for a grouped product.
     *
     * @param WC_Product $product Product object.
     * @param bool       $force Force update. Used during create.
     * @since 3.0.0
     */
    protected function update_post_meta(&$product, $force = false)
{
}
    /**
     * Handle updated meta props after updating meta data.
     *
     * @since  3.0.0
     * @param  WC_Product $product Product object.
     */
    protected function handle_updated_props(&$product)
{
}
    /**
     * Sync grouped product prices with children.
     *
     * @since 3.0.0
     * @param WC_Product|int $product Product object or product ID.
     */
    public function sync_price(&$product)
{
}
    /**
     * Loop over child products and update the grouped product prices.
     *
     * @param WC_Product $product Product object.
     */
    protected function update_prices_from_children(&$product)
{
}
}
