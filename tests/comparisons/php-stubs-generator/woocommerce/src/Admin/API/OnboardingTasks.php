<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Onboarding Tasks Controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class OnboardingTasks extends \WC_REST_Data_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-admin';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'onboarding/tasks';
    /**
     * Duration to millisecond mapping.
     *
     * @var array
     */
    protected $duration_to_ms = array('day' => DAY_IN_SECONDS * 1000, 'hour' => HOUR_IN_SECONDS * 1000, 'week' => WEEK_IN_SECONDS * 1000);
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Check if a given request has access to create a product.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function create_products_permission_check($request)
    {
    }
    /**
     * Check if a given request has access to create a product.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function create_pages_permission_check($request)
    {
    }
    /**
     * Check if a given request has access to manage woocommerce.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_tasks_permission_check($request)
    {
    }
    /**
     * Check if a given request has permission to hide task lists.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function hide_task_list_permission_check($request)
    {
    }
    /**
     * Check if a given request has access to manage woocommerce.
     *
     * @deprecated 7.8.0 snooze task is deprecated.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function snooze_task_permissions_check($request)
    {
    }
    /**
     * Import sample products from given CSV path.
     *
     * @param  string $csv_file CSV file path.
     * @return WP_Error|WP_REST_Response
     */
    public static function import_sample_products_from_csv($csv_file)
    {
    }
    /**
     * Import sample products from WooCommerce sample CSV.
     *
     * @internal
     * @return WP_Error|WP_REST_Response
     */
    public static function import_sample_products()
    {
    }
    /**
     * Creates a product from a template name passed in through the template_name param.
     *
     * @internal
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public static function create_product_from_template($request)
    {
    }
    /**
     * Get header mappings from CSV columns.
     *
     * @internal
     * @param string $file File path.
     * @return array Mapped headers.
     */
    public static function get_header_mappings($file)
    {
    }
    /**
     * Sanitize special column name regex.
     *
     * @internal
     * @param  string $value Raw special column name.
     * @return string
     */
    public static function sanitize_special_column_name_regex($value)
    {
    }
    /**
     * Create a homepage from a template.
     *
     * @return WP_Error|array
     */
    public static function create_homepage()
    {
    }
    /**
     * Get the query params for task lists.
     *
     * @return array
     */
    public function get_task_list_params()
    {
    }
    /**
     * Get the onboarding tasks.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function get_tasks($request)
    {
    }
    /**
     * Dismiss a single task.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function dismiss_task($request)
    {
    }
    /**
     * Undo dismissal of a single task.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function undo_dismiss_task($request)
    {
    }
    /**
     * Snooze an onboarding task.
     *
     * @deprecated 7.8.0 snooze task is deprecated.
     *
     * @param WP_REST_Request $request Request data.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function snooze_task($request)
    {
    }
    /**
     * Undo snooze of a single task.
     *
     * @deprecated 7.8.0 undo snooze task is deprecated.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function undo_snooze_task($request)
    {
    }
    /**
     * Hide a task list.
     *
     * @param WP_REST_Request $request Request data.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function hide_task_list($request)
    {
    }
    /**
     * Unhide a task list.
     *
     * @param WP_REST_Request $request Request data.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function unhide_task_list($request)
    {
    }
    /**
     * Action a single task.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function action_task($request)
    {
    }
}