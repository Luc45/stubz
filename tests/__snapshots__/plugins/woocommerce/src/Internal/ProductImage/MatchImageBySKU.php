<?php

namespace Automattic\WooCommerce\Internal\ProductImage;

/**
 * Class for the product image matching by SKU.
 */
class MatchImageBySKU
{
    /**
     * MatchImageBySKU constructor.
     */
    public function __construct()
{
}
    /**
     * Is this feature enabled.
     *
     * @since 8.3.0
     * @return bool
     */
    public function is_enabled()
{
}
    /**
     * Handler for 'woocommerce_get_settings_products', adds the settings related to the product image SKU matching table.
     *
     * @param array  $settings Original settings configuration array.
     * @param string $section_id Settings section identifier.
     * @return array New settings configuration array.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function add_product_image_sku_setting(array $settings, string $section_id): array
{
}
}