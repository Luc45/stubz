<?php

namespace ;

/**
 * WC_Admin_Meta_Boxes.
 */
class WC_Admin_Meta_Boxes
{
    const ERROR_STORE = 'woocommerce_meta_box_errors';

    /**
     * Is meta boxes saved once?
     *
     * @var boolean
     */
    private static $saved_meta_boxes = false;

    /**
     * Meta box error messages.
     *
     * @var array
     */
    public static $meta_box_errors = array (
);

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Add an error message.
     *
     * @param string $text Error to add.
     */
    public static function add_error($text)
    {
        // stub
    }

    /**
     * Save errors to an option.
     *
     * Note that calling this will overwrite any errors that have already been stored via the Options API.
     * Unless you are sure you want this, consider using the append_to_error_store() method instead.
     */
    public function save_errors()
    {
        // stub
    }

    /**
     * If additional errors have been added in the current request (ie, via the add_error() method) then they
     * will be added to the persistent error store via the Options API.
     *
     * @since 6.5.0
     */
    public function append_to_error_store()
    {
        // stub
    }

    /**
     * Show any stored error messages.
     */
    public function output_errors()
    {
        // stub
    }

    /**
     * Add WC Meta boxes.
     */
    public function add_meta_boxes()
    {
        // stub
    }

    /**
     * Add default sort order for meta boxes on product page.
     */
    public function add_product_boxes_sort_order()
    {
        // stub
    }

    /**
     * Remove bloat.
     */
    public function remove_meta_boxes()
    {
        // stub
    }

    /**
     * Rename core meta boxes.
     */
    public function rename_meta_boxes()
    {
        // stub
    }

    /**
     * Check if we're saving, the trigger an action based on the post type.
     *
     * @param  int    $post_id Post ID.
     * @param  object $post Post object.
     */
    public function save_meta_boxes($post_id, $post)
    {
        // stub
    }

    /**
     * Remove irrelevant block templates from the list of available templates for products.
     * This will also remove custom created templates.
     *
     * @param string[] $templates Array of template header names keyed by the template file name.
     *
     * @return string[] Templates array excluding block-based templates.
     */
    public function remove_block_templates($templates)
    {
        // stub
    }

}

