<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders;

/**
 * When {@see OrdersTableDataStore} is in use, this class takes care of redirecting admins from CPT-based URLs
 * to the new ones.
 */
class PostsRedirectionController
{
    /**
     * Constructor.
     *
     * @param PageController $page_controller Page controller instance. Used to generate links/URLs.
     */
    public function __construct(\Automattic\WooCommerce\Internal\Admin\Orders\PageController $page_controller)
    {
    }
}
