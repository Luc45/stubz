<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor;

/**
 * Product block registration and style registration functionality.
 */
class BlockRegistry
{
    public const GENERIC_BLOCKS_DIR = 'product-editor/blocks/generic';
    public const PRODUCT_FIELDS_BLOCKS_DIR = 'product-editor/blocks/product-fields';
    public const GENERIC_BLOCKS = array (
  0 => 'woocommerce/conditional',
  1 => 'woocommerce/product-checkbox-field',
  2 => 'woocommerce/product-collapsible',
  3 => 'woocommerce/product-radio-field',
  4 => 'woocommerce/product-pricing-field',
  5 => 'woocommerce/product-section',
  6 => 'woocommerce/product-section-description',
  7 => 'woocommerce/product-subsection',
  8 => 'woocommerce/product-subsection-description',
  9 => 'woocommerce/product-details-section-description',
  10 => 'woocommerce/product-tab',
  11 => 'woocommerce/product-toggle-field',
  12 => 'woocommerce/product-taxonomy-field',
  13 => 'woocommerce/product-text-field',
  14 => 'woocommerce/product-text-area-field',
  15 => 'woocommerce/product-number-field',
  16 => 'woocommerce/product-linked-list-field',
  17 => 'woocommerce/product-select-field',
  18 => 'woocommerce/product-notice-field',
);
    public const PRODUCT_FIELDS_BLOCKS = array (
  0 => 'woocommerce/product-catalog-visibility-field',
  1 => 'woocommerce/product-custom-fields',
  2 => 'woocommerce/product-custom-fields-toggle-field',
  3 => 'woocommerce/product-description-field',
  4 => 'woocommerce/product-downloads-field',
  5 => 'woocommerce/product-images-field',
  6 => 'woocommerce/product-inventory-email-field',
  7 => 'woocommerce/product-sku-field',
  8 => 'woocommerce/product-name-field',
  9 => 'woocommerce/product-regular-price-field',
  10 => 'woocommerce/product-sale-price-field',
  11 => 'woocommerce/product-schedule-sale-fields',
  12 => 'woocommerce/product-shipping-class-field',
  13 => 'woocommerce/product-shipping-dimensions-fields',
  14 => 'woocommerce/product-summary-field',
  15 => 'woocommerce/product-tag-field',
  16 => 'woocommerce/product-inventory-quantity-field',
  17 => 'woocommerce/product-variation-items-field',
  18 => 'woocommerce/product-password-field',
  19 => 'woocommerce/product-list-field',
  20 => 'woocommerce/product-has-variations-notice',
  21 => 'woocommerce/product-single-variation-notice',
);
    /**
     * Get the singleton instance.
     */
    public static function get_instance(): Automattic\WooCommerce\Admin\Features\ProductBlockEditor\BlockRegistry
{
}
    /**
     * Constructor
     */
    protected function __construct()
{
}
    /**
     * Register product related block categories.
     *
     * @param array[]                 $block_categories Array of categories for block types.
     * @param WP_Block_Editor_Context $editor_context   The current block editor context.
     */
    public function register_categories($block_categories, $editor_context)
{
}
    /**
     * Check if a block is registered.
     *
     * @param string $block_name Block name.
     */
    public function is_registered($block_name): bool
{
}
    /**
     * Unregister a block.
     *
     * @param string $block_name Block name.
     */
    public function unregister($block_name)
{
}
    /**
     * Register a block type from metadata stored in the block.json file.
     *
     * @param string $file_or_folder Path to the JSON file with metadata definition for the block or
     * path to the folder where the `block.json` file is located.
     *
     * @return \WP_Block_Type|false The registered block type on success, or false on failure.
     */
    public function register_block_type_from_metadata($file_or_folder)
{
}
}