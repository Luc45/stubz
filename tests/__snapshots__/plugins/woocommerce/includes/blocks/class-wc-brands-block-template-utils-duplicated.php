<?php
/**
 * BlockTemplateUtils class used for serving block templates from Woo Blocks.
 * IMPORTANT: These methods have been duplicated from Gutenberg/lib/full-site-editing/block-templates.php as those functions are not for public usage.
 *
 * For internal use only by the Automattic\WooCommerce\Internal\Brands package.
 *
 * @version 9.4.0
 */
class BlockTemplateUtilsDuplicated
{
    const DIRECTORY_NAMES = array (
  'DEPRECATED_TEMPLATES' => 'block-templates',
  'DEPRECATED_TEMPLATE_PARTS' => 'block-template-parts',
  'TEMPLATES' => 'templates',
  'TEMPLATE_PARTS' => 'parts',
);
    const PLUGIN_SLUG = 'woocommerce/woocommerce';
    /**
     * Returns an array containing the references of
     * the passed blocks and their inner blocks.
     *
     * @param array $blocks array of blocks.
     *
     * @return array block references to the passed blocks and their inner blocks.
     */
    public static function gutenberg_flatten_blocks(&$blocks)
{
}
    /**
     * Parses wp_template content and injects the current theme's
     * stylesheet as a theme attribute into each wp_template_part
     *
     * @param string $template_content serialized wp_template content.
     *
     * @return string Updated wp_template content.
     */
    public static function gutenberg_inject_theme_attribute_in_content($template_content)
{
}
    /**
     * Build a unified template object based a post Object.
     *
     * @param \WP_Post $post Template post.
     *
     * @return \WP_Block_Template|\WP_Error Template.
     */
    public static function gutenberg_build_template_result_from_post($post)
{
}
    /**
     * Build a unified template object based on a theme file.
     *
     * @param array|object $template_file Theme file.
     * @param string       $template_type wp_template or wp_template_part.
     *
     * @return \WP_Block_Template Template.
     */
    public static function gutenberg_build_template_result_from_file($template_file, $template_type)
{
}
    /**
     * Build a new template object so that we can make Woo Blocks default templates available in the current theme should they not have any.
     *
     * @param string $template_file Block template file path.
     * @param string $template_type wp_template or wp_template_part.
     * @param string $template_slug Block template slug e.g. single-product.
     * @param bool   $template_is_from_theme If the block template file is being loaded from the current theme instead of Woo Blocks.
     *
     * @return object Block template object.
     */
    public static function create_new_block_template_object($template_file, $template_type, $template_slug, $template_is_from_theme = false)
{
}
    /**
     * Converts template slugs into readable titles.
     *
     * @param string $template_slug The templates slug (e.g. single-product).
     * @return string Human friendly title converted from the slug.
     */
    public static function convert_slug_to_title($template_slug)
{
}
    /**
     * Gets the first matching template part within themes directories
     *
     * Since [Gutenberg 12.1.0](https://github.com/WordPress/gutenberg/releases/tag/v12.1.0), the conventions for
     * block templates and parts directory has changed from `block-templates` and `block-templates-parts`
     * to `templates` and `parts` respectively.
     *
     * This function traverses all possible combinations of directory paths where a template or part
     * could be located and returns the first one which is readable, prioritizing the new convention
     * over the deprecated one, but maintaining that one for backwards compatibility.
     *
     * @param string $template_slug  The slug of the template (i.e. without the file extension).
     * @param string $template_type  Either `wp_template` or `wp_template_part`.
     *
     * @return string|null  The matched path or `null` if no match was found.
     */
    public static function get_theme_template_path($template_slug, $template_type = 'wp_template')
{
}
    /**
     * Check if the theme has a template. So we know if to load our own in or not.
     *
     * @param string $template_name name of the template file without .html extension e.g. 'single-product'.
     * @return boolean
     */
    public static function theme_has_template($template_name)
{
}
    /**
     * Check if the theme has a template. So we know if to load our own in or not.
     *
     * @param string $template_name name of the template file without .html extension e.g. 'single-product'.
     * @return boolean
     */
    public static function theme_has_template_part($template_name)
{
}
    /**
     * Checks to see if they are using a compatible version of WP, or if not they have a compatible version of the Gutenberg plugin installed.
     *
     * @return boolean
     */
    public static function supports_block_templates()
{
}
    /**
     * Returns whether the blockified templates should be used or not.
     *
     * First, we need to make sure WordPress version is higher than 6.1 (lowest that supports Products block).
     * Then, if the option is not stored on the db, we need to check if the current theme is a block one or not.
     *
     * @return boolean
     */
    public static function should_use_blockified_product_grid_templates()
{
}
}
