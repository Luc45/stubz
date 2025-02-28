<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * Pagination class.
 */
class Pagination
{
    /**
     * Add pagination headers to a response object.
     *
     * @param \WP_REST_Response $response Reference to the response object.
     * @param \WP_REST_Request  $request The request object.
     * @param int               $total_items Total items found.
     * @param int               $total_pages Total pages found.
     * @return \WP_REST_Response
     */
    public function add_headers($response, $request, $total_items, $total_pages)
    {
    }
    /**
     * Get current page.
     *
     * @param \WP_REST_Request $request The request object.
     * @return int Get the page from the request object.
     */
    protected function get_current_page($request)
    {
    }
    /**
     * Get base for links from the request object.
     *
     * @param \WP_REST_Request $request The request object.
     * @return string
     */
    protected function get_link_base($request)
    {
    }
    /**
     * Add a page link.
     *
     * @param \WP_REST_Response $response Reference to the response object.
     * @param string            $name Page link name. e.g. prev.
     * @param int               $page Page number.
     * @param string            $link_base Base URL.
     */
    protected function add_page_link(&$response, $name, $page, $link_base)
    {
    }
}