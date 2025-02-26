<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Onboarding Tasks Controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class OnboardingTasks
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
    protected $duration_to_ms;

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check if a given request has access to create a product.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function create_products_permission_check($request)
    {
        // stub
    }

    /**
     * Check if a given request has access to create a product.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function create_pages_permission_check($request)
    {
        // stub
    }

    /**
     * Check if a given request has access to manage woocommerce.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_tasks_permission_check($request)
    {
        // stub
    }

    /**
     * Check if a given request has permission to hide task lists.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function hide_task_list_permission_check($request)
    {
        // stub
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
        // stub
    }

    /**
     * Import sample products from given CSV path.
     *
     * @param  string $csv_file CSV file path.
     * @return WP_Error|WP_REST_Response
     */
    public static function import_sample_products_from_csv($csv_file)
    {
        // stub
    }

    /**
     * Import sample products from WooCommerce sample CSV.
     *
     * @internal
     * @return WP_Error|WP_REST_Response
     */
    public static function import_sample_products()
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Returns a valid cover block with an image, if one exists, or background as a fallback.
     *
     * @internal
     * @param  array $image Image to use for the cover block. Should contain a media ID and image URL.
     * @return string Block content.
     */
    private static function get_homepage_cover_block($image)
    {
        // stub
    }

    /**
     * Returns a valid media block with an image, if one exists, or a uninitialized media block the user can set.
     *
     * @internal
     * @param  array  $image Image to use for the cover block. Should contain a media ID and image URL.
     * @param  string $align If the image should be aligned to the left or right.
     * @return string Block content.
     */
    private static function get_homepage_media_block($image, $align = 'left')
    {
        // stub
    }

    /**
     * Returns a homepage template to be inserted into a post. A different template will be used depending on the number of products.
     *
     * @internal
     * @param int $post_id ID of the homepage template.
     * @return string Template contents.
     */
    private static function get_homepage_template($post_id)
    {
        // stub
    }

    /**
     * Gets the possible industry images from the plugin folder for sideloading. If an image doesn't exist, other.jpg is used a fallback.
     *
     * @internal
     * @return array An array of images by industry.
     */
    private static function get_available_homepage_images()
    {
        // stub
    }

    /**
     * Uploads a number of images to a homepage template, depending on the selected industry from the profile wizard.
     *
     * @internal
     * @param  int $post_id ID of the homepage template.
     * @param  int $number_of_images The number of images that should be sideloaded (depending on how many media slots are in the template).
     * @return array An array of images that have been attached to the post.
     */
    private static function sideload_homepage_images($post_id, $number_of_images)
    {
        // stub
    }

    /**
     * Create a homepage from a template.
     *
     * @return WP_Error|array
     */
    public static function create_homepage()
    {
        // stub
    }

    /**
     * Get the query params for task lists.
     *
     * @return array
     */
    public function get_task_list_params()
    {
        // stub
    }

    /**
     * Get the onboarding tasks.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function get_tasks($request)
    {
        // stub
    }

    /**
     * Dismiss a single task.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function dismiss_task($request)
    {
        // stub
    }

    /**
     * Undo dismissal of a single task.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function undo_dismiss_task($request)
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Action a single task.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function action_task($request)
    {
        // stub
    }

}

