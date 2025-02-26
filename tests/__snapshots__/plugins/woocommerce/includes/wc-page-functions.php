<?php

/**
 * Replace a page title with the endpoint title.
 *
 * @param  string $title Post title.
 * @return string
 */
function wc_page_endpoint_title($title)
{
    // stub
}

/**
 * Replace the title part of the document title.
 *
 * @param array $title {
 *     The document title parts.
 *
 *     @type string $title   Title of the viewed page.
 *     @type string $page    Optional. Page number if paginated.
 *     @type string $tagline Optional. Site description when on home page.
 *     @type string $site    Optional. Site title when not on home page.
 * }
 * @return array
 */
function wc_page_endpoint_document_title_parts($title)
{
    // stub
}

/**
 * Retrieve page ids - used for myaccount, edit_address, shop, cart, checkout, pay, view_order, terms. returns -1 if no page is found.
 *
 * @param string $page Page slug.
 * @return int
 */
function wc_get_page_id($page)
{
    // stub
}

/**
 * Retrieve page permalink.
 *
 * @param string      $page page slug.
 * @param string|bool $fallback Fallback URL if page is not set. Defaults to home URL. @since 3.4.0.
 * @return string
 */
function wc_get_page_permalink($page, $fallback = null)
{
    // stub
}

/**
 * Get endpoint URL.
 *
 * Gets the URL for an endpoint, which varies depending on permalink settings.
 *
 * @param  string $endpoint  Endpoint slug.
 * @param  string $value     Query param value.
 * @param  string $permalink Permalink.
 *
 * @return string
 */
function wc_get_endpoint_url($endpoint, $value = '', $permalink = '')
{
    // stub
}

/**
 * Hide or adjust menu items conditionally.
 *
 * @param array $items Navigation items.
 * @return array
 */
function wc_nav_menu_items($items)
{
    // stub
}

/**
 * Hide menu items in navigation blocks conditionally.
 *
 * Does the same thing as wc_nav_menu_items but for block themes.
 *
 * @since 9.3.0
 * @param \WP_Block_list $inner_blocks Inner blocks.
 * @return \WP_Block_list
 */
function wc_nav_menu_inner_blocks($inner_blocks)
{
    // stub
}

/**
 * Fix active class in nav for shop page.
 *
 * @param array $menu_items Menu items.
 * @return array
 */
function wc_nav_menu_item_classes($menu_items)
{
    // stub
}

/**
 * Fix active class in wp_list_pages for shop page.
 *
 * See details in https://github.com/woocommerce/woocommerce/issues/177.
 *
 * @param string $pages Pages list.
 * @return string
 */
function wc_list_pages($pages)
{
    // stub
}

