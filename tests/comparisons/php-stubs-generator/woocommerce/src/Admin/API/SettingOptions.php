<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Setting Options controller.
 *
 * @internal
 * @extends WC_REST_Setting_Options_Controller
 */
class SettingOptions extends \WC_REST_Setting_Options_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Invalidates API cache when updating settings options.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return array Of WP_Error or WP_REST_Response.
     */
    public function batch_items($request)
    {
    }
}
