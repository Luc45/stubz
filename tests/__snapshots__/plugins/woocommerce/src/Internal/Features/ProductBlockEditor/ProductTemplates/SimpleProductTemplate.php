<?php

namespace Automattic\WooCommerce\Internal\Features\ProductBlockEditor\ProductTemplates;

/**
 * Simple Product Template.
 */
class SimpleProductTemplate extends \Automattic\WooCommerce\Internal\Features\ProductBlockEditor\ProductTemplates\AbstractProductFormTemplate implements \Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\ProductFormTemplateInterface
{
    public const GROUP_IDS = array (
  'GENERAL' => 'general',
  'ORGANIZATION' => 'organization',
  'INVENTORY' => 'inventory',
  'SHIPPING' => 'shipping',
  'VARIATIONS' => 'variations',
  'LINKED_PRODUCTS' => 'linked-products',
);
    /**
     * SimpleProductTemplate constructor.
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
     * Get the tax classes as select options.
     *
     * @param string $post_type The post type.
     * @return array Array of options.
     */
    public static function get_tax_classes($post_type = 'product')
{
}
}