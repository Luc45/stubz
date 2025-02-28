<?php

namespace Automattic\WooCommerce\Blocks\AIContent;

/**
 * Pattern Images class.
 *
 * @internal
 */
class UpdatePatterns
{
    /**
     * All patterns that are actively in use in the Assembler.
     */
    public const WC_PATTERNS_IN_THE_ASSEMBLER = array(
'woocommerce-blocks/featured-category-triple',
'woocommerce-blocks/hero-product-3-split',
'woocommerce-blocks/hero-product-chessboard',
'woocommerce-blocks/hero-product-split',
'woocommerce-blocks/product-collection-4-columns',
'woocommerce-blocks/product-collection-5-columns',
'woocommerce-blocks/social-follow-us-in-social-media',
'woocommerce-blocks/testimonials-3-columns',
'woocommerce-blocks/product-collection-featured-products-5-columns'
);
    /**
     * Generate AI content and assign AI-managed images to Patterns.
     *
     * @param Connection      $ai_connection The AI connection.
     * @param string|WP_Error $token The JWT token.
     * @param array|WP_Error  $images The array of images.
     * @param string          $business_description The business description.
     *
     * @return bool|WP_Error
     */
    public function generate_content($ai_connection, $token, $images, $business_description)
{
}
    /**
     * Returns the patterns with AI generated content.
     *
     * @param Connection      $ai_connection The AI connection.
     * @param string|WP_Error $token The JWT token.
     * @param array           $patterns The array of patterns.
     * @param string          $business_description The business description.
     *
     * @return array|WP_Error The patterns with AI generated content.
     */
    public function generate_ai_content_for_patterns($ai_connection, $token, $patterns, $business_description)
{
}
    /**
     * Get the Patterns Dictionary.
     *
     * @return mixed|WP_Error|null
     */
    public static function get_patterns_dictionary()
{
}
}