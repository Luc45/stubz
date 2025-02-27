<?php

namespace Automattic\WooCommerce\Blocks\AIContent;

/**
 * Pattern Images class.
 *
 * @internal
 */
class UpdatePatterns
{
    const WC_PATTERNS_IN_THE_ASSEMBLER = array (
  0 => 'woocommerce-blocks/featured-category-triple',
  1 => 'woocommerce-blocks/hero-product-3-split',
  2 => 'woocommerce-blocks/hero-product-chessboard',
  3 => 'woocommerce-blocks/hero-product-split',
  4 => 'woocommerce-blocks/product-collection-4-columns',
  5 => 'woocommerce-blocks/product-collection-5-columns',
  6 => 'woocommerce-blocks/social-follow-us-in-social-media',
  7 => 'woocommerce-blocks/testimonials-3-columns',
  8 => 'woocommerce-blocks/product-collection-featured-products-5-columns',
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
        // stub
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
        // stub
    }

    /**
     * Prepares the prompts for the AI.
     *
     * @param array $patterns The array of patterns.
     *
     * @return array
     */
    private function prepare_prompts(array $patterns)
    {
        // stub
    }

    /**
     * Prepares the expected results format for the AI.
     *
     * @param array $prompts The array of prompts.
     *
     * @return array
     */
    private function prepare_expected_results_format(array $prompts)
    {
        // stub
    }

    /**
     * Formats the prompts for the AI.
     *
     * @param array  $prompts The array of prompts.
     * @param string $business_description The business description.
     * @param array  $expected_results_format The expected results format.
     *
     * @return array
     */
    private function format_prompts_for_ai(array $prompts, string $business_description, array $expected_results_format)
    {
        // stub
    }

    /**
     * Fetches and validates the AI responses.
     *
     * @param Connection      $ai_connection The AI connection.
     * @param string|WP_Error $token The JWT token.
     * @param array           $formatted_prompts The array of formatted prompts.
     * @param array           $expected_results_format The array of expected results format.
     *
     * @return array|mixed
     */
    private function fetch_and_validate_ai_responses($ai_connection, $token, $formatted_prompts, $expected_results_format)
    {
        // stub
    }

    /**
     * Applies the AI responses to the patterns.
     *
     * @param array $patterns The array of patterns.
     * @param array $ai_responses The array of AI responses.
     *
     * @return mixed
     */
    private function apply_ai_responses_to_patterns(array $patterns, array $ai_responses)
    {
        // stub
    }

    /**
     * Sanitize the string from the AI generated content. It removes double quotes that can cause issues when
     * decoding the patterns JSON.
     *
     * @param string $string The string to be sanitized.
     *
     * @return string The sanitized string.
     */
    private function sanitize_string($string)
    {
        // stub
    }

    /**
     * Assign selected images to patterns.
     *
     * @param array $patterns_dictionary The array of patterns.
     * @param array $selected_images The array of images.
     *
     * @return array|WP_Error The patterns with images.
     */
    private function assign_selected_images_to_patterns($patterns_dictionary, $selected_images)
    {
        // stub
    }

    /**
     * Get the Patterns Dictionary.
     *
     * @return mixed|WP_Error|null
     */
    public static function get_patterns_dictionary()
    {
        // stub
    }

    /**
     * Returns whether the pattern has images.
     *
     * @param array $pattern The array representing the pattern.
     *
     * @return bool True if the pattern has images, false otherwise.
     */
    private function pattern_has_images(array $pattern): bool
    {
        // stub
    }

    /**
     * Returns the images for the given pattern.
     *
     * @param array $pattern         The array representing the pattern.
     * @param array $selected_images The array of images.
     *
     * @return array An array containing an array of the images in the first position and their alts in the second.
     */
    private function get_images_for_pattern(array $pattern, array $selected_images): array
    {
        // stub
    }

    /**
     * Returns the selected image format. Defaults to portrait.
     *
     * @param array $selected_image The selected image to be assigned to the pattern.
     *
     * @return string The selected image format.
     */
    private function get_selected_image_format($selected_image)
    {
        // stub
    }

}