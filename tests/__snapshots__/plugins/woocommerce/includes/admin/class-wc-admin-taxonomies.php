<?php
/**
 * WC_Admin_Taxonomies class.
 */
class WC_Admin_Taxonomies
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
}
    /**
     * Constructor.
     */
    public function __construct()
{
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
}
    /**
     * When a term is deleted, delete its meta.
     *
     * @deprecated 3.6.0 No longer needed.
     * @param mixed $term_id Term ID.
     */
    public function delete_term($term_id)
{
}
    /**
     * Category thumbnail fields.
     */
    public function add_category_fields()
{
}
    /**
     * Edit category thumbnail field.
     *
     * @param mixed $term Term (category) being edited.
     */
    public function edit_category_fields($term)
{
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
}
    /**
     * Description for product_cat page to aid users.
     */
    public function product_cat_description()
{
}
    /**
     * Add some notes to describe the behavior of the default category.
     */
    public function product_cat_notes()
{
}
    /**
     * Description for shipping class page to aid users.
     */
    public function product_attribute_description()
{
}
    /**
     * Thumbnail column added to category admin.
     *
     * @param mixed $columns Columns array.
     * @return array
     */
    public function product_cat_columns($columns)
{
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
}
    /**
     * Handle custom row actions.
     */
    public function handle_product_cat_row_actions()
{
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
}
    /**
     * Maintain term hierarchy when editing a product.
     *
     * @param  array $args Term checklist args.
     * @return array
     */
    public function disable_checked_ontop($args)
{
}
    /**
     * Admin footer scripts for the product categories admin screen
     *
     * @return void
     */
    public function scripts_at_product_cat_screen_footer()
{
}
}
