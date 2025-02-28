<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Shows print shipping label banner on edit order page.
 */
class TransientNotices
{
    /**
     * Option name for the queue.
     */
    const QUEUE_OPTION = 'woocommerce_admin_transient_notices_queue';
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Get all notices in the queue.
     *
     * @return array
     */
    public static function get_queue()
    {
    }
    /**
     * Get all notices in the queue by a given user ID.
     *
     * @param int $user_id User ID.
     * @return array
     */
    public static function get_queue_by_user($user_id)
    {
    }
    /**
     * Get a notice by ID.
     *
     * @param array $notice_id Notice of ID to get.
     * @return array|null
     */
    public static function get($notice_id)
    {
    }
    /**
     * Add a notice to be shown.
     *
     * @param array $notice Notice.
     *    $notice = array(
     *      'id'      => (string) Unique ID for the notice. Required.
     *      'user_id' => (int|null) User ID to show the notice to.
     *      'status'  => (string) info|error|success
     *      'content' => (string) Content to be shown for the notice. Required.
     *      'options' => (array) Array of options to be passed to the notice component.
     *       See https://developer.wordpress.org/block-editor/reference-guides/data/data-core-notices/#createNotice for available options.
     *    ).
     */
    public static function add($notice)
    {
    }
    /**
     * Remove a notice by ID.
     *
     * @param array $notice_id Notice of ID to remove.
     */
    public static function remove($notice_id)
    {
    }
    /**
     * Preload options to prime state of the application.
     *
     * @param array $options Array of options to preload.
     * @return array
     */
    public function preload_options($options)
    {
    }
}