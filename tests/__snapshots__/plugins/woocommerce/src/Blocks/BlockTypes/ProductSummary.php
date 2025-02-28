<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductSummary class.
 */
class ProductSummary extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-summary';
    /**
     * API version name.
     *
     * @var string
     */
    protected $api_version = '2';
    /**
     * Get block supports. Shared with the frontend.
     * IMPORTANT: If you change anything here, make sure to update the JS file too.
     *
     * @return array
     */
    protected function get_block_type_supports()
{
}
    /**
     * Overwrite parent method to prevent script registration.
     *
     * It is necessary to register and enqueues assets during the render
     * phase because we want to load assets only if the block has the content.
     */
    protected function register_block_type_assets()
{
}
    /**
     * Register the context.
     */
    protected function get_block_type_uses_context()
{
}
    /**
     * Get product description depends on config.
     *
     * @param WC_Product $product                   Product object.
     * @param bool       $show_description_if_empty Defines if fallback to full description.
     * @return string
     */
    private function get_source($product, $show_description_if_empty)
{
}
    /**
     * Create anchor element based on input.
     *
     * @param WC_Product $product   Product object.
     * @param string     $link_text Link text.
     * @return string
     */
    private function create_anchor($product, $link_text)
{
}
    /**
     * Get first paragraph from some HTML text, or return the whole string.
     *
     * @param string $source Source text.
     * @return string First paragraph found in string.
     */
    private function get_first_paragraph($source)
{
}
    /**
     * Count words, characters (excluding spaces), or characters (including spaces).
     *
     * @param string $text      Text to count.
     * @param string $count_type Count type: 'words', 'characters_excluding_spaces', or 'characters_including_spaces'.
     * @return int Count of specified type.
     */
    private function count_text($text, $count_type)
{
}
    /**
     * Trim characters to a specified length.
     *
     * @param string $text Text to trim.
     * @param int    $max_length Maximum length of the text.
     * @param string $count_type What is being counted. One of 'words', 'characters_excluding_spaces', or 'characters_including_spaces'.
     * @return string Trimmed text.
     */
    private function trim_characters($text, $max_length, $count_type)
{
}
    /**
     * Generates the summary text from a string of text. It's not ideal
     * but allows keeping the editor and frontend consistent.
     *
     * NOTE: If editing, keep it in sync with generateSummary function from
     * plugins/woocommerce-blocks/assets/js/base/components/summary/utils.ts!
     *
     * Once HTML API allow for HTML manipulation both functions (PHP and JS)
     * should be updated to solution fully respecting the word count.
     * https://github.com/woocommerce/woocommerce/issues/52835
     *
     * @param string $source     Source text.
     * @param int    $max_length Limit number of items returned if text has multiple paragraphs.
     * @return string Generated summary.
     */
    private function generate_summary($source, $max_length)
{
}
    /**
     * Include and render the block.
     *
     * @param array    $attributes Block attributes. Default empty array.
     * @param string   $content    Block content. Default empty string.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
{
}
}