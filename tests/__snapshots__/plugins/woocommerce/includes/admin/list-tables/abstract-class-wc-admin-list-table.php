<?php

namespace ;

/**
 * WC_Admin_List_Table Class.
 */
abstract class WC_Admin_List_Table
{
    /**
     * Post type.
     *
     * @var string
     */
    protected $list_table_type = '';

    /**
     * Object being shown on the row.
     *
     * @var object|null
     */
    protected $object = null;

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Show blank slate.
     *
     * @param string $which String which tablenav is being shown.
     */
    public function maybe_render_blank_state($which)
    {
        // stub
    }

    /**
     * Render blank state. Extend to add content.
     */
    protected function render_blank_state()
    {
        // stub
    }

    /**
     * Removes this type from list of post types that support "View Mode" switching.
     * View mode is seen on posts where you can switch between list or excerpt. Our post types don't support
     * it, so we want to hide the useless UI from the screen options tab.
     *
     * @param  array $post_types Array of post types supporting view mode.
     * @return array             Array of post types supporting view mode, without this type.
     */
    public function disable_view_mode($post_types)
    {
        // stub
    }

    /**
     * See if we should render search filters or not.
     */
    public function restrict_manage_posts()
    {
        // stub
    }

    /**
     * Handle any filters.
     *
     * @param array $query_vars Query vars.
     * @return array
     */
    public function request_query($query_vars)
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

    /**
     * Set row actions.
     *
     * @param array   $actions Array of actions.
     * @param WP_Post $post Current post object.
     * @return array
     */
    public function row_actions($actions, $post)
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
     * Adjust which columns are displayed by default.
     *
     * @param array  $hidden Current hidden columns.
     * @param object $screen Current screen.
     * @return array
     */
    public function default_hidden_columns($hidden, $screen)
    {
        // stub
    }

    /**
     * Set list table primary column.
     *
     * @param  string $default Default value.
     * @param  string $screen_id Current screen ID.
     * @return string
     */
    public function list_table_primary_column($default, $screen_id)
    {
        // stub
    }

    /**
     * Define primary column.
     *
     * @return array
     */
    protected function get_primary_column()
    {
        // stub
    }

    /**
     * Define hidden columns.
     *
     * @return array
     */
    protected function define_hidden_columns()
    {
        // stub
    }

    /**
     * Define which columns are sortable.
     *
     * @param array $columns Existing columns.
     * @return array
     */
    public function define_sortable_columns($columns)
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
     * Define bulk actions.
     *
     * @param array $actions Existing actions.
     * @return array
     */
    public function define_bulk_actions($actions)
    {
        // stub
    }

    /**
     * Pre-fetch any data for the row each column has access to it.
     *
     * @param int $post_id Post ID being shown.
     */
    protected function prepare_row_data($post_id)
    {
        // stub
    }

    /**
     * Render individual columns.
     *
     * @param string $column Column ID to render.
     * @param int    $post_id Post ID being shown.
     */
    public function render_columns($column, $post_id)
    {
        // stub
    }

    /**
     * Handle bulk actions.
     *
     * @param  string $redirect_to URL to redirect to.
     * @param  string $action      Action name.
     * @param  array  $ids         List of ids.
     * @return string
     */
    public function handle_bulk_actions($redirect_to, $action, $ids)
    {
        // stub
    }

}

