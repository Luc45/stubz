<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor;

/**
 * The Product Template that represents the relation between the Product and
 * the LayoutTemplate (ProductFormTemplateInterface)
 *
 * @see ProductFormTemplateInterface
 */
class ProductTemplate extends \
{
    /**
     * The template id.
     *
     * @var string
     */
    private $id = null;

    /**
     * The template title.
     *
     * @var string
     */
    private $title = null;

    /**
     * The product data.
     *
     * @var array
     */
    private $product_data = null;

    /**
     * The template order.
     *
     * @var Integer
     */
    private $order = 999;

    /**
     * The layout template id.
     *
     * @var string
     */
    private $layout_template_id = null;

    /**
     * The template description.
     *
     * @var string
     */
    private $description = null;

    /**
     * The template icon.
     *
     * @var string
     */
    private $icon = null;

    /**
     * If the template is directly selectable through the UI.
     *
     * @var boolean
     */
    private $is_selectable_by_user = true;

    /**
     * ProductTemplate constructor
     *
     * @param array $data The data.
     */
    public function __construct(array $data)
    {
        // stub
    }

    /**
     * Get the template ID.
     *
     * @return string The ID.
     */
    public function get_id()
    {
        // stub
    }

    /**
     * Get the template title.
     *
     * @return string The title.
     */
    public function get_title()
    {
        // stub
    }

    /**
     * Get the layout template ID.
     *
     * @return string The layout template ID.
     */
    public function get_layout_template_id()
    {
        // stub
    }

    /**
     * Set the layout template ID.
     *
     * @param string $layout_template_id The layout template ID.
     */
    public function set_layout_template_id(string $layout_template_id)
    {
        // stub
    }

    /**
     * Get the product data.
     *
     * @return array The product data.
     */
    public function get_product_data()
    {
        // stub
    }

    /**
     * Get the template description.
     *
     * @return string The description.
     */
    public function get_description()
    {
        // stub
    }

    /**
     * Set the template description.
     *
     * @param string $description The template description.
     */
    public function set_description(string $description)
    {
        // stub
    }

    /**
     * Get the template icon.
     *
     * @return string The icon.
     */
    public function get_icon()
    {
        // stub
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
        // stub
    }

    /**
     * Get the template order.
     *
     * @return int The order.
     */
    public function get_order()
    {
        // stub
    }

    /**
     * Get the selectable attribute.
     *
     * @return boolean Selectable.
     */
    public function get_is_selectable_by_user()
    {
        // stub
    }

    /**
     * Set the template order.
     *
     * @param int $order The template order.
     */
    public function set_order(int $order)
    {
        // stub
    }

    /**
     * Get the product template as JSON like.
     *
     * @return array The JSON.
     */
    public function to_json()
    {
        // stub
    }

}

