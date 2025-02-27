<?php

/**
 * REST API WCCOM Site Base REST API Controller Astract Class.
 *
 * @extends WC_REST_Controller
 */
abstract class WC_REST_WCCOM_Site_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wccom-site/v3';

    /**
     * Check whether user has permission to access controller's endpoints.
     *
     * @since 8.6.0
     * @param WP_USER $user User object.
     * @return bool
     */
    protected abstract function user_has_permission($user): bool;

    /**
     * Check permissions.
     *
     * Please note that access to this endpoint is also governed by the WC_WCCOM_Site::authenticate_wccom() method.
     *
     * @since  7.8.0
     * @return bool|WP_Error
     */
    public function check_permission()
    {
        // stub
    }

    /**
     * Create a WP_REST_Response.
     *
     * @param array $data response data.
     * @param int   $status HTTP response status.
     * @return WP_REST_Response|WP_Error
     */
    protected function get_response(array $data, int $status = 200)
    {
        // stub
    }

}
