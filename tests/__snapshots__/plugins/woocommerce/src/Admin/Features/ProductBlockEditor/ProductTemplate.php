<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor;

/**
 * The Product Template that represents the relation between the Product and
 * the LayoutTemplate (ProductFormTemplateInterface)
 *
 * @see ProductFormTemplateInterface
 */
class ProductTemplate
{
    /**
     * ProductTemplate constructor
     *
     * @param array $data The data.
     */
    public function __construct(array $data)
{
}
    /**
     * Get the template ID.
     *
     * @return string The ID.
     */
    public function get_id()
{
}
    /**
     * Get the template title.
     *
     * @return string The title.
     */
    public function get_title()
{
}
    /**
     * Get the layout template ID.
     *
     * @return string The layout template ID.
     */
    public function get_layout_template_id()
{
}
    /**
     * Set the layout template ID.
     *
     * @param string $layout_template_id The layout template ID.
     */
    public function set_layout_template_id(string $layout_template_id)
{
}
    /**
     * Get the product data.
     *
     * @return array The product data.
     */
    public function get_product_data()
{
}
    /**
     * Get the template description.
     *
     * @return string The description.
     */
    public function get_description()
{
}
    /**
     * Set the template description.
     *
     * @param string $description The template description.
     */
    public function set_description(string $description)
{
}
    /**
     * Get the template icon.
     *
     * @return string The icon.
     */
    public function get_icon()
{
}
    /**
     * Set the template icon.
     *
     * @see https://github.com/WordPress/gutenberg/tree/trunk/packages/icons.
     *
     * @param string $icon The icon name from the @wordpress/components or a url for an external image resource.
     */
    public function set_icon(string $icon)
{
}
    /**
     * Get the template order.
     *
     * @return int The order.
     */
    public function get_order()
{
}
    /**
     * Get the selectable attribute.
     *
     * @return boolean Selectable.
     */
    public function get_is_selectable_by_user()
{
}
    /**
     * Set the template order.
     *
     * @param int $order The template order.
     */
    public function set_order(int $order)
{
}
    /**
     * Get the product template as JSON like.
     *
     * @return array The JSON.
     */
    public function to_json()
{
}
}