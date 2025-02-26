<?php

namespace ;

/**
 * WC_Admin_List_Table_Coupons Class.
 */
class WC_Admin_List_Table_Coupons extends \WC_Admin_List_Table
{
    /**
     * Post type.
     *
     * @var string
     */
    protected $list_table_type = 'shop_coupon';

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Render blank state.
     */
    protected function render_blank_state()
    {
        // stub
    }

    /**
     * Define primary column.
     *
     * @return string
     */
    protected function get_primary_column()
    {
        // stub
    }

    /**
     * Get row actions to show in the list table.
     *
     * @param array   $actions Array of actions.
     * @param WP_Post $post Current post object.
     * @return array
     */
    protected function get_row_actions($actions, $post)
    {
        // stub
    }

    /**
     * Define which columns to show on this screen.
     *
     * @param array $columns Existing columns.
     * @return array
     */
    public function define_columns($columns)
    {
        // stub
    }

    /**
     * Pre-fetch any data for the row each column has access to it. the_coupon global is there for bw compat.
     *
     * @param int $post_id Post ID being shown.
     */
    protected function prepare_row_data($post_id)
    {
        // stub
    }

    /**
     * Render column: coupon_code.
     */
    protected function render_coupon_code_column()
    {
        // stub
    }

    /**
     * Render column: type.
     */
    protected function render_type_column()
    {
        // stub
    }

    /**
     * Render column: amount.
     */
    protected function render_amount_column()
    {
        // stub
    }

    /**
     * Render column: products.
     */
    protected function render_products_column()
    {
        // stub
    }

    /**
     * Render column: usage_limit.
     */
    protected function render_usage_limit_column()
    {
        // stub
    }

    /**
     * Render column: usage.
     */
    protected function render_usage_column()
    {
        // stub
    }

    /**
     * Render column: expiry_date.
     */
    protected function render_expiry_date_column()
    {
        // stub
    }

    /**
     * Render column: description.
     */
    protected function render_description_column()
    {
        // stub
    }

    /**
     * Render any custom filters and search inputs for the list table.
     */
    protected function render_filters()
    {
        // stub
    }

    /**
     * Handle any custom filters.
     *
     * @param array $query_vars Query vars.
     * @return array
     */
    protected function query_filters($query_vars)
    {
        // stub
    }

}

