<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor;

/**
 * Product block registration and style registration functionality.
 */
class BlockRegistry
{
    const GENERIC_BLOCKS_DIR = 'product-editor/blocks/generic';

    const PRODUCT_FIELDS_BLOCKS_DIR = 'product-editor/blocks/product-fields';

    const GENERIC_BLOCKS = array (
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

    const PRODUCT_FIELDS_BLOCKS = array (
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
     * Singleton instance.
     *
     * @var BlockRegistry
     */
    private static $instance = null;

    /**
     * Get the singleton instance.
     */
    public static function get_instance(): Automattic\WooCommerce\Admin\Features\ProductBlockEditor\BlockRegistry
    {
        // stub
    }

    /**
     * Constructor
     */
    protected function __construct()
    {
        // stub
    }

    /**
     * Get a file path for a given block file.
     *
     * @param string $path File path.
     * @param string $dir File directory.
     */
    private function get_file_path($path, $dir)
    {
        // stub
    }

    /**
     * Register all the product blocks.
     */
    private function register_product_blocks()
    {
        // stub
    }

    /**
     * Register product related block categories.
     *
     * @param array[]                 $block_categories Array of categories for block types.
     * @param WP_Block_Editor_Context $editor_context   The current block editor context.
     */
    public function register_categories($block_categories, $editor_context)
    {
        // stub
    }

    /**
     * Get the block name without the "woocommerce/" prefix.
     *
     * @param string $block_name Block name.
     *
     * @return string
     */
    private function remove_block_prefix($block_name)
    {
        // stub
    }

    /**
     * Augment the attributes of a block by adding attributes that are used by the product editor.
     *
     * @param array $attributes Block attributes.
     */
    private function augment_attributes($attributes)
    {
        // stub
    }

    /**
     * Augment the uses_context of a block by adding attributes that are used by the product editor.
     *
     * @param array $uses_context Block uses_context.
     */
    private function augment_uses_context($uses_context)
    {
        // stub
    }

    /**
     * Register a single block.
     *
     * @param string $block_name Block name.
     * @param string $block_dir Block directory.
     *
     * @return WP_Block_Type|false The registered block type on success, or false on failure.
     */
    private function register_block($block_name, $block_dir)
    {
        // stub
    }

    /**
     * Check if a block is registered.
     *
     * @param string $block_name Block name.
     */
    public function is_registered($block_name): bool
    {
        // stub
    }

    /**
     * Unregister a block.
     *
     * @param string $block_name Block name.
     */
    public function unregister($block_name)
    {
        // stub
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
        // stub
    }

}

