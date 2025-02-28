<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * ProductItemTrait
 *
 * Shared functionality for formating product item data.
 */
trait ProductItemTrait
{
    /**
     * Get an array of pricing data.
     *
     * @param \WC_Product $product Product instance.
     * @param string      $tax_display_mode If returned prices are incl or excl of tax.
     * @return array
     */
    protected function prepare_product_price_response(\WC_Product $product, $tax_display_mode = '')
    {
    }
    /**
     * Format variation data, for example convert slugs such as attribute_pa_size to Size.
     *
     * @param array       $variation_data Array of data from the cart.
     * @param \WC_Product $product Product data.
     * @return array
     */
    protected function format_variation_data($variation_data, $product)
    {
    }
}