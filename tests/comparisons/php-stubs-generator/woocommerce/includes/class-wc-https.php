<?php

/**
 * WC_HTTPS class.
 *
 * @class    WC_HTTPS
 * @version  2.2.0
 * @package  WooCommerce\Classes
 * @category Class
 * @author   WooThemes
 */
class WC_HTTPS
{
    /**
     * Hook in our HTTPS functions if we're on the frontend. This will ensure any links output to a page (when viewing via HTTPS) are also served over HTTPS.
     */
    public static function init()
    {
    }
    /**
     * Force https for urls.
     *
     * @param mixed $content
     * @return string
     */
    public static function force_https_url($content)
    {
    }
    /**
     * Force a post link to be SSL if needed.
     *
     * @param string $link
     * @param int $page_id
     *
     * @return string
     */
    public static function force_https_page_link($link, $page_id)
    {
    }
    /**
     * Template redirect - if we end up on a page ensure it has the correct http/https url.
     */
    public static function force_https_template_redirect()
    {
    }
    /**
     * Template redirect - if we end up on a page ensure it has the correct http/https url.
     */
    public static function unforce_https_template_redirect()
    {
    }
    /**
     * Force posts to PayPal to use TLS v1.2. See:
     *        https://core.trac.wordpress.org/ticket/36320
     *        https://core.trac.wordpress.org/ticket/34924#comment:13
     *        https://www.paypal-knowledge.com/infocenter/index?page=content&widgetview=true&id=FAQ1914&viewlocale=en_US
     *
     * @param string $handle
     * @param mixed $r
     * @param string $url
     */
    public static function http_api_curl($handle, $r, $url)
    {
    }
}