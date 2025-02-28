<?php

namespace Automattic\WooCommerce\Blocks\Images;

/**
 * Pexels API client.
 *
 * @internal
 */
class Pexels
{
    public const EXTERNAL_MEDIA_PEXELS_ENDPOINT = '/wpcom/v2/external-media/list/pexels';
    /**
     * Returns the list of images for the given search criteria.
     *
     * @param Connection $ai_connection The AI connection.
     * @param string     $token The JWT token.
     * @param string     $business_description The business description.
     *
     * @return array|\WP_Error Array of images, or WP_Error if the request failed.
     */
    public function get_images($ai_connection, $token, $business_description)
{
}
}