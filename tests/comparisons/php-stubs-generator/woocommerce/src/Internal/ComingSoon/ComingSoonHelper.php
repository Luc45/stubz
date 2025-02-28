<?php

namespace Automattic\WooCommerce\Internal\ComingSoon;

/**
 * Provides helper methods for coming soon functionality.
 */
class ComingSoonHelper
{
    /**
     * Returns true when the entire site is live.
     */
    public function is_site_live() : bool
    {
    }
    /**
     * Returns true when the entire site is coming soon mode.
     */
    public function is_site_coming_soon() : bool
    {
    }
    /**
     * Returns true when only the store pages are in coming soon mode.
     */
    public function is_store_coming_soon() : bool
    {
    }
    /**
     * Returns true when the provided URL is behind a coming soon screen.
     *
     * @param string $url The URL to check.
     */
    public function is_url_coming_soon(string $url) : bool
    {
    }
    /**
     * Builds the relative URL from the WP instance.
     *
     * @internal
     * @link https://wordpress.stackexchange.com/a/274572
     * @param \WP $wp WordPress environment instance.
     */
    public function get_url_from_wp(\WP $wp)
    {
    }
}