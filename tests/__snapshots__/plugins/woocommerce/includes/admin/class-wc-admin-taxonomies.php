<?php

namespace ;

/**
 * WC_Admin_Taxonomies class.
 */
class WC_Admin_Taxonomies extends \
{
    /**
     * Class instance.
     *
     * @var WC_Admin_Taxonomies instance
     */
    protected static $instance = false;

    /**
     * Default category ID.
     *
     * @var int
     */
    private $default_cat_id = 0;

    /**
     * Get class instance
     */
    public static function get_instance()
    {
        // stub
    }

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Order term when created (put in position 0).
     *
     * @param mixed  $term_id Term ID.
     * @param mixed  $tt_id Term taxonomy ID.
     * @param string $taxonomy Taxonomy slug.
     */
    public function create_term($term_id, $tt_id = '', $taxonomy = '')
    {
        // stub
    }

    /**
     * When a term is deleted, delete its meta.
     *
     * @deprecated 3.6.0 No longer needed.
     * @param mixed $term_id Term ID.
     */
    public function delete_term($term_id)
    {
        // stub
    }

    /**
     * Category thumbnail fields.
     */
    public function add_category_fields()
    {
        // stub
    }

    /**
     * Edit category thumbnail field.
     *
     * @param mixed $term Term (category) being edited.
     */
    public function edit_category_fields($term)
    {
        // stub
    }

    /**
     * Save category fields
     *
     * @param mixed  $term_id Term ID being saved.
     * @param mixed  $tt_id Term taxonomy ID.
     * @param string $taxonomy Taxonomy slug.
     */
    public function save_category_fields($term_id, $tt_id = '', $taxonomy = '')
    {
        // stub
    }

    /**
     * Description for product_cat page to aid users.
     */
    public function product_cat_description()
    {
        // stub
    }

    /**
     * Add some notes to describe the behavior of the default category.
     */
    public function product_cat_notes()
    {
        // stub
    }

    /**
     * Description for shipping class page to aid users.
     */
    public function product_attribute_description()
    {
        // stub
    }

    /**
     * Thumbnail column added to category admin.
     *
     * @param mixed $columns Columns array.
     * @return array
     */
    public function product_cat_columns($columns)
    {
        // stub
    }

    /**
     * Adjust row actions.
     *
     * @param array  $actions Array of actions.
     * @param object $term Term object.
     * @return array
     */
    public function product_cat_row_actions($actions, $term)
    {
        // stub
    }

    /**
     * Handle custom row actions.
     */
    public function handle_product_cat_row_actions()
    {
        // stub
    }

    /**
     * Thumbnail column value added to category admin.
     *
     * @param string $columns Column HTML output.
     * @param string $column Column name.
     * @param int    $id Product ID.
     *
     * @return string
     */
    public function product_cat_column($columns, $column, $id)
    {
        // stub
    }

    /**
     * Maintain term hierarchy when editing a product.
     *
     * @param  array $args Term checklist args.
     * @return array
     */
    public function disable_checked_ontop($args)
    {
        // stub
    }

    /**
     * Admin footer scripts for the product categories admin screen
     *
     * @return void
     */
    public function scripts_at_product_cat_screen_footer()
    {
        // stub
    }

}

