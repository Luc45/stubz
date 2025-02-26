<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders;

/**
 * When Custom Order Tables are not the default order store (ie, posts are authoritative), we should take care of
 * redirecting requests for the order editor and order admin list table to the equivalent posts-table screens.
 *
 * If the redirect logic is problematic, it can be unhooked using code like the following example:
 *
 *     remove_action(
 *         'admin_page_access_denied',
 *         array( wc_get_container()->get( COTRedirectionController::class ), 'handle_hpos_admin_requests' )
 *     );
 */
class COTRedirectionController extends \
{
    /**
     * Add hooks needed to perform our magic.
     */
    public function setup(): void
    {
        // stub
    }

    /**
     * Listen for denied admin requests and, if they appear to relate to HPOS admin screens, potentially
     * redirect the user to the equivalent CPT-driven screens.
     *
     * @param array|null $query_params The query parameters to use when determining the redirect. If not provided, the $_GET superglobal will be used.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_hpos_admin_requests($query_params = null)
    {
        // stub
    }

}

