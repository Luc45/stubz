<?php

namespace Automattic\WooCommerce\Blocks\AIContent;

/**
 * ContentProcessor class.
 *
 * Process images for content
 *
 * @internal
 */
class ContentProcessor
{
    /**
     * Summarize the business description to ensure better results are returned by AI.
     *
     * @param string     $business_description The business description.
     * @param Connection $ai_connection  The AI connection.
     * @param string     $token  The JWT token.
     * @param integer    $character_limit The character limit for the business description.
     *
     * @return mixed|WP_Error
     */
    public static function summarize_business_description($business_description, $ai_connection, $token, $character_limit = 150)
{
}
    /**
     * Ensure that images are provided for assignment to products and patterns.
     *
     * @param array|WP_Error $images  The array of images.
     * @param Connection     $ai_connection  The AI connection.
     * @param string         $token  The JWT token.
     * @param string         $business_description The business description.
     *
     * @return array|int|mixed|string|WP_Error
     */
    public static function verify_images($images, $ai_connection, $token, $business_description)
{
}
    /**
     * Adjust the size of images for optimal performance on products and patterns.
     *
     * @param string $image_url The image URL.
     * @param string $usage_type The usage type of the image. Either 'products' or 'patterns'.
     *
     * @return string
     */
    public static function adjust_image_size($image_url, $usage_type)
{
}
}