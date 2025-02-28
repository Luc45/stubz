<?php

/**
 * Returns core WC pages to connect to WC-Admin.
 *
 * @return array
 */
function wc_admin_get_core_pages_to_connect()
{
}
/**
 * Filter breadcrumbs for core pages that aren't explicitly connected.
 *
 * @param array $breadcrumbs Breadcrumb pieces.
 * @return array Filtered breadcrumb pieces.
 */
function wc_admin_filter_core_page_breadcrumbs($breadcrumbs)
{
}
/**
 * Render the WC-Admin header bar on all WooCommerce core pages.
 *
 * @param bool $is_connected Whether the current page is connected.
 * @param bool $current_page The current page, if connected.
 * @return bool Whether to connect the page.
 */
function wc_admin_connect_core_pages($is_connected, $current_page)
{
}
