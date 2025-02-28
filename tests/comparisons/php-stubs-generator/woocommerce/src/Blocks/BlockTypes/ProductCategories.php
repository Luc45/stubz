<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductCategories class.
 */
class ProductCategories extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-categories';
    /**
     * Default attribute values, should match what's set in JS `registerBlockType`.
     *
     * @var array
     */
    protected $defaults = array('hasCount' => true, 'hasImage' => false, 'hasEmpty' => false, 'isDropdown' => false, 'isHierarchical' => true, 'showChildrenOnly' => false);
    /**
     * Get block attributes.
     *
     * @return array
     */
    protected function get_block_type_attributes()
    {
    }
    /**
     * Render the Product Categories List block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content    Block content.
     * @param WP_Block $block Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Get the list of classes to apply to this block.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return string space-separated list of classes.
     */
    protected function get_container_classes($attributes = array())
    {
    }
    /**
     * Get categories (terms) from the db.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return array
     */
    protected function get_categories($attributes)
    {
    }
    /**
     * Build hierarchical tree of categories.
     *
     * @param array $categories List of terms.
     * @param bool  $children_only Is the block rendering only the children of the current category.
     * @return array
     */
    protected function build_category_tree($categories, $children_only)
    {
    }
    /**
     * Build hierarchical tree of categories by appending children in the tree.
     *
     * @param array $categories List of terms.
     * @param array $categories_by_parent List of terms grouped by parent.
     * @return array
     */
    protected function fill_category_children($categories, $categories_by_parent)
    {
    }
    /**
     * Render the category list as a dropdown.
     *
     * @param array $categories List of terms.
     * @param array $attributes Block attributes. Default empty array.
     * @param int   $uid Unique ID for the rendered block, used for HTML IDs.
     * @return string Rendered output.
     */
    protected function renderDropdown($categories, $attributes, $uid)
    {
    }
    /**
     * Render dropdown options list.
     *
     * @param array $categories List of terms.
     * @param array $attributes Block attributes. Default empty array.
     * @param int   $uid Unique ID for the rendered block, used for HTML IDs.
     * @param int   $depth Current depth.
     * @return string Rendered output.
     */
    protected function renderDropdownOptions($categories, $attributes, $uid, $depth = 0)
    {
    }
    /**
     * Render the category list as a list.
     *
     * @param array $categories List of terms.
     * @param array $attributes Block attributes. Default empty array.
     * @param int   $uid Unique ID for the rendered block, used for HTML IDs.
     * @param int   $depth Current depth.
     * @return string Rendered output.
     */
    protected function renderList($categories, $attributes, $uid, $depth = 0)
    {
    }
    /**
     * Render a list of terms.
     *
     * @param array $categories List of terms.
     * @param array $attributes Block attributes. Default empty array.
     * @param int   $uid Unique ID for the rendered block, used for HTML IDs.
     * @param int   $depth Current depth.
     * @return string Rendered output.
     */
    protected function renderListItems($categories, $attributes, $uid, $depth = 0)
    {
    }
    /**
     * Returns the category image html
     *
     * @param \WP_Term $category Term object.
     * @param array    $attributes Block attributes. Default empty array.
     * @param string   $size Image size, defaults to 'woocommerce_thumbnail'.
     * @return string
     */
    public function get_image_html($category, $attributes, $size = 'woocommerce_thumbnail')
    {
    }
    /**
     * Get the count, if displaying.
     *
     * @param object $category Term object.
     * @param array  $attributes Block attributes. Default empty array.
     * @return string
     */
    protected function getCount($category, $attributes)
    {
    }
}