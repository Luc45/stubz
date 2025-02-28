<?php

namespace Automattic\WooCommerce\Internal\Features\ProductBlockEditor\ProductTemplates;

/**
 * Product Variation Template.
 */
class ProductVariationTemplate extends \Automattic\WooCommerce\Internal\Features\ProductBlockEditor\ProductTemplates\AbstractProductFormTemplate implements \Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\ProductFormTemplateInterface
{
    public const GROUP_IDS = array(
'GENERAL' => 'general',
'PRICING' => 'pricing',
'INVENTORY' => 'inventory',
'SHIPPING' => 'shipping'
);
    public const SINGLE_VARIATION_NOTICE_DISMISSED_OPTION = 'woocommerce_single_variation_notice_dismissed';
    /**
     * ProductVariationTemplate constructor.
     */
    public function __construct()
{
}
    /**
     * Get the template ID.
     */
    public function get_id(): string
{
}
    /**
     * Get the template title.
     */
    public function get_title(): string
{
}
    /**
     * Get the template description.
     */
    public function get_description(): string
{
}
    /**
     * Adds the group blocks to the template.
     */
    protected function add_group_blocks()
{
}
    /**
     * Adds the general group blocks to the template.
     */
    protected function add_general_group_blocks()
{
}
    /**
     * Adds the inventory group blocks to the template.
     */
    protected function add_inventory_group_blocks()
{
}
    /**
     * Adds the shipping group blocks to the template.
     */
    protected function add_shipping_group_blocks()
{
}
}