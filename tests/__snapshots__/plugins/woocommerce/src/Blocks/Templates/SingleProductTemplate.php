<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * SingleProductTemplate class.
 *
 * @internal
 */
class SingleProductTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplate
{
    const SLUG = 'single-product';

    /**
     * Initialization method.
     */
    public function init()
{
}
    /**
     * Returns the title of the template.
     *
     * @return string
     */
    public function get_template_title()
{
}
    /**
     * Returns the description of the template.
     *
     * @return string
     */
    public function get_template_description()
{
}
    /**
     * Renders the default block template from Woo Blocks if no theme templates exist.
     */
    public function render_block_template()
{
}
    /**
     * Add the block template objects to be used.
     *
     * @param array $query_result Array of template objects.
     * @return array
     */
    public function update_single_product_content($query_result)
{
}
    /**
     * Replace the first single product template block with the password form. Remove all other single product template blocks.
     *
     * @param array   $parsed_blocks Array of parsed block objects.
     * @param boolean $is_already_replaced If the password form has already been added.
     * @return array Parsed blocks
     */
    private static function replace_first_single_product_template_block_with_password_form($parsed_blocks, $is_already_replaced)
{
}
    /**
     * Add password form to the Single Product Template.
     *
     * @param string $content The content of the template.
     * @return string
     */
    public static function add_password_form($content)
{
}
}