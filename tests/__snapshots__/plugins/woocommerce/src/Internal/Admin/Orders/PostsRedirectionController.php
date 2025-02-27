<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders;

/**
 * When {@see OrdersTableDataStore} is in use, this class takes care of redirecting admins from CPT-based URLs
 * to the new ones.
 */
class PostsRedirectionController
{
    /**
     * Instance of the PageController class.
     *
     * @var PageController
     */
    private $page_controller = null;

    /**
     * Constructor.
     *
     * @param PageController $page_controller Page controller instance. Used to generate links/URLs.
     */
    public function __construct(Automattic\WooCommerce\Internal\Admin\Orders\PageController $page_controller)
    {
        // stub
    }

    /**
     * If needed, performs a redirection to the main orders page.
     *
     * @return void
     */
    private function maybe_redirect_to_orders_page(): void
    {
        // stub
    }

    /**
     * If needed, performs a redirection to the new order page.
     *
     * @return void
     */
    private function maybe_redirect_to_new_order_page(): void
    {
        // stub
    }

    /**
     * If needed, performs a redirection to the edit order page.
     *
     * @return void
     */
    private function maybe_redirect_to_edit_order_page(): void
    {
        // stub
    }

}