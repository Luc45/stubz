<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * \Automattic\WooCommerce\Internal\Admin\CategoryLookup class.
 */
class CategoryLookup extends \
{
    /**
     * Stores changes to categories we need to sync.
     *
     * @var array
     */
    protected $edited_product_cats = array(
);

    /**
     * The single instance of the class.
     *
     * @var object
     */
    protected static $instance = null;

    /**
     * Constructor
     *
     * @return void
     */
    protected function __construct()
    {
        // stub
    }

    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    public static final function instance()
    {
        // stub
    }

    /**
     * Init hooks.
     */
    public function init()
    {
        // stub
    }

    /**
     * Regenerate all lookup table data.
     */
    public function regenerate()
    {
        // stub
    }

    /**
     * Store edits so we know when the parent ID changes.
     *
     * @param int $category_id Term ID being edited.
     */
    public function before_edit($category_id)
    {
        // stub
    }

    /**
     * When a product category gets edited, see if we need to sync the table.
     *
     * @param int $category_id Term ID being edited.
     */
    public function on_edit($category_id)
    {
        // stub
    }

    /**
     * When a product category gets created, add a new lookup row.
     *
     * @param int $category_id Term ID being created.
     */
    public function on_create($category_id)
    {
        // stub
    }

    /**
     * Delete lookup table data from a tree.
     *
     * @param int $category_id Category ID to delete.
     * @param int $category_tree_id Tree to delete from.
     * @return void
     */
    protected function delete($category_id, $category_tree_id)
    {
        // stub
    }

    /**
     * Updates lookup table data for a category by ID.
     *
     * @param int $category_id Category ID to update.
     */
    protected function update($category_id)
    {
        // stub
    }

    /**
     * Get category lookup table values to insert.
     *
     * @param int $category_id Category ID to insert.
     * @param int $category_tree_id Tree to insert into.
     * @return string
     */
    protected function get_insert_sql($category_id, $category_tree_id)
    {
        // stub
    }

    /**
     * Used to construct insert query recursively.
     *
     * @param  array $inserts Array of data to insert.
     * @param  array $terms   Terms to insert.
     * @param  array $parents Parent IDs the terms belong to.
     */
    protected function get_term_insert_values(&$inserts, $terms, $parents = array(
))
    {
        // stub
    }

    /**
     * Convert flat terms array into nested array.
     *
     * @param array   $hierarchy Array to put terms into.
     * @param array   $terms Array of terms (id=>parent).
     * @param integer $parent Parent ID.
     */
    protected function unflatten_terms(&$hierarchy, &$terms, $parent = 0)
    {
        // stub
    }

    /**
     * Get category descendants.
     *
     * @param int $category_id The category ID to lookup.
     * @return array
     */
    protected function get_descendants($category_id)
    {
        // stub
    }

    /**
     * Return all ancestor category ids for a category.
     *
     * @param int $category_id The category ID to lookup.
     * @return array
     */
    protected function get_ancestors($category_id)
    {
        // stub
    }

    /**
     * Add category lookup table to $wpdb object.
     */
    public static function define_category_lookup_tables_in_wpdb()
    {
        // stub
    }

}

