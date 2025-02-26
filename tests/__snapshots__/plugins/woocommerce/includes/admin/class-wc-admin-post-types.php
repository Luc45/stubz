<?php

namespace ;

/**
 * WC_Admin_Post_Types Class.
 *
 * Handles the edit posts views and some functionality on the edit post screen for WC post types.
 */
class WC_Admin_Post_Types extends \
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Looks at the current screen and loads the correct list table handler.
     *
     * @since 3.3.0
     */
    public function setup_screen()
    {
        // stub
    }

    /**
     * Change messages when a post type is updated.
     *
     * @param  array $messages Array of messages.
     * @return array
     */
    public function post_updated_messages($messages)
    {
        // stub
    }

    /**
     * Add messages when an order is updated.
     *
     * @param array $messages Array of messages.
     *
     * @return array
     */
    public function order_updated_messages(array $messages)
    {
        // stub
    }

    /**
     * Specify custom bulk actions messages for different post types.
     *
     * @param  array $bulk_messages Array of messages.
     * @param  array $bulk_counts Array of how many objects were updated.
     * @return array
     */
    public function bulk_post_updated_messages($bulk_messages, $bulk_counts)
    {
        // stub
    }

    /**
     * Shows a warning when editing a password-protected coupon.
     *
     * @since 9.2.0
     */
    private function maybe_display_warning_for_password_protected_coupon()
    {
        // stub
    }

    /**
     * Custom bulk edit - form.
     *
     * @param string $column_name Column being shown.
     * @param string $post_type Post type being shown.
     */
    public function bulk_edit($column_name, $post_type)
    {
        // stub
    }

    /**
     * Custom quick edit - form.
     *
     * @param string $column_name Column being shown.
     * @param string $post_type Post type being shown.
     */
    public function quick_edit($column_name, $post_type)
    {
        // stub
    }

    /**
     * Offers a way to hook into save post without causing an infinite loop
     * when quick/bulk saving product info.
     *
     * @since 3.0.0
     * @param int    $post_id Post ID being saved.
     * @param object $post Post object being saved.
     */
    public function bulk_and_quick_edit_hook($post_id, $post)
    {
        // stub
    }

    /**
     * Quick and bulk edit saving.
     *
     * @param int    $post_id Post ID being saved.
     * @param object $post Post object being saved.
     * @return int
     */
    public function bulk_and_quick_edit_save_post($post_id, $post)
    {
        // stub
    }

    /**
     * Quick edit.
     *
     * @param int        $post_id Post ID being saved.
     * @param WC_Product $product Product object.
     */
    private function quick_edit_save($post_id, $product)
    {
        // stub
    }

    /**
     * Bulk edit.
     *
     * @param int        $post_id Post ID being saved.
     * @param WC_Product $product Product object.
     */
    public function bulk_edit_save($post_id, $product)
    {
        // stub
    }

    /**
     * Disable the auto-save functionality for Orders.
     */
    public function disable_autosave()
    {
        // stub
    }

    /**
     * Output extra data on post forms.
     *
     * @param WP_Post $post Current post object.
     */
    public function edit_form_top($post)
    {
        // stub
    }

    /**
     * Change title boxes in admin.
     *
     * @param string  $text Text to shown.
     * @param WP_Post $post Current post object.
     * @return string
     */
    public function enter_title_here($text, $post)
    {
        // stub
    }

    /**
     * Print coupon description textarea field.
     *
     * @param WP_Post $post Current post object.
     */
    public function edit_form_after_title($post)
    {
        // stub
    }

    /**
     * Hidden default Meta-Boxes.
     *
     * @param  array  $hidden Hidden boxes.
     * @param  object $screen Current screen.
     * @return array
     */
    public function hidden_meta_boxes($hidden, $screen)
    {
        // stub
    }

    /**
     * Output product visibility options.
     */
    public function product_data_visibility()
    {
        // stub
    }

    /**
     * Grant downloadable file access to any newly added files on any existing.
     * orders for this product that have previously been granted downloadable file access.
     *
     * @param int   $product_id product identifier.
     * @param int   $variation_id optional product variation identifier.
     * @param array $downloadable_files newly set files.
     * @deprecated 3.3.0 and moved to post-data class.
     */
    public function process_product_file_download_paths($product_id, $variation_id, $downloadable_files)
    {
        // stub
    }

    /**
     * When editing the shop page, we should hide templates.
     *
     * @param array   $page_templates Templates array.
     * @param string  $theme Classname.
     * @param WP_Post $post The current post object.
     * @return array
     */
    public function hide_cpt_archive_templates($page_templates, $theme, $post)
    {
        // stub
    }

    /**
     * Show a notice above the CPT archive.
     *
     * @param WP_Post $post The current post object.
     */
    public function show_cpt_archive_notice($post)
    {
        // stub
    }

    /**
     * Add a post display state for special WC pages in the page list table.
     *
     * @param array   $post_states An array of post display states.
     * @param WP_Post $post        The current post object.
     */
    public function add_display_post_states($post_states, $post)
    {
        // stub
    }

    /**
     * Apply product type constraints to stock status.
     *
     * @param WC_Product  $product The product whose stock status will be adjusted.
     * @param string|null $stock_status The stock status to use for adjustment, or null if no new stock status has been supplied in the request.
     * @return WC_Product The supplied product, or the synced product if it was a variable product.
     */
    private function maybe_update_stock_status($product, $stock_status)
    {
        // stub
    }

    /**
     * Set the new regular or sale price if requested.
     *
     * @param WC_Product $product The product to set the new price for.
     * @param string     $price_type 'regular' or 'sale'.
     * @return bool true if a new price has been set, false otherwise.
     */
    private function set_new_price($product, $price_type)
    {
        // stub
    }

    /**
     * Get the current request data ($_REQUEST superglobal).
     * This method is added to ease unit testing.
     *
     * @return array The $_REQUEST superglobal.
     */
    protected function request_data()
    {
        // stub
    }

}

