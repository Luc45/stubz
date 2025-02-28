<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * BlockTemplatesController class.
 *
 * @internal
 */
class BlockTemplatesController
{
    const TEMPLATES_ROOT_DIR = 'templates';

    /**
     * Initialization method.
     */
    public function init()
{
}
    /**
     * Renders the `core/template-part` block on the server.
     *
     * This is done because the core handling for template parts only supports templates from the current theme, not
     * from a plugin.
     *
     * @param array $attributes The block attributes.
     * @return string The render.
     */
    public function render_woocommerce_template_part($attributes)
{
}
    /**
     * This function is used on the `pre_get_block_template` hook to return the fallback template from the db in case
     * the template is eligible for it.
     *
     * Currently, the Products by Category, Products by Tag and Products by Attribute templates fall back to the
     * Product Catalog template. That means that if there are customizations in the Product Catalog template,
     * they are also reflected in the other templates as long as they haven't been customized as well.
     *
     * @param \WP_Block_Template|null $template Block template object to short-circuit the default query,
     *                                          or null to allow WP to run its normal queries.
     * @param string                  $id Template unique identifier (example: theme_slug//template_slug).
     * @param string                  $template_type wp_template or wp_template_part.
     *
     * @return object|null
     */
    public function get_block_template_fallback($template, $id, $template_type)
{
}
    /**
     * Adds the fallback template to the template hierarchy.
     *
     * @param array $template_hierarchy A list of template candidates, in descending order of priority.
     */
    public function add_fallback_template_to_hierarchy($template_hierarchy)
{
}
    /**
     * By default, the Template Part Block only supports template parts that are in the current theme directory.
     * This render_callback wrapper allows us to add support for plugin-housed template parts.
     *
     * @param array $settings Array of determined settings for registering a block type.
     * @param array $metadata     Metadata provided for registering a block type.
     */
    public function add_plugin_templates_parts_support($settings, $metadata)
{
}
    /**
     * Prevents shortcodes in templates having their HTML content broken by wpautop.
     *
     * @see https://core.trac.wordpress.org/ticket/58366 for more info.
     *
     * @param array $settings Array of determined settings for registering a block type.
     * @param array $metadata     Metadata provided for registering a block type.
     */
    public function prevent_shortcodes_html_breakage($settings, $metadata)
{
}
    /**
     * Prevents the pages that are assigned as Cart/Checkout from showing the "template" selector in the page-editor.
     * We want to avoid this flow and point users towards the Site Editor instead.
     *
     * @return void
     */
    public function hide_template_selector_in_cart_checkout_pages()
{
}
    /**
     * This function checks if there's a block template file in `woocommerce/templates/templates/`
     * to return to pre_get_posts short-circuiting the query in Gutenberg.
     *
     * @param \WP_Block_Template|null $template Return a block template object to short-circuit the default query,
     *                                               or null to allow WP to run its normal queries.
     * @param string                  $id Template unique identifier (example: theme_slug//template_slug).
     * @param string                  $template_type wp_template or wp_template_part.
     *
     * @return mixed|\WP_Block_Template|\WP_Error
     */
    public function get_block_file_template($template, $id, $template_type)
{
}
    /**
     * Add the template title and description to WooCommerce templates.
     *
     * @param WP_Block_Template|null $block_template The found block template, or null if there isn't one.
     * @param string                 $id             Template unique identifier (example: 'theme_slug//template_slug').
     * @param array                  $template_type  Template type: 'wp_template' or 'wp_template_part'.
     * @return WP_Block_Template|null
     */
    public function add_block_template_details($block_template, $id, $template_type)
{
}
    /**
     * Add the block template objects to be used.
     *
     * @param array  $query_result Array of template objects.
     * @param array  $query Optional. Arguments to retrieve templates.
     * @param string $template_type wp_template or wp_template_part.
     * @return array
     */
    public function add_block_templates($query_result, $query, $template_type)
{
}
    /**
     * Gets the templates saved in the database.
     *
     * @param array  $slugs An array of slugs to retrieve templates for.
     * @param string $template_type wp_template or wp_template_part.
     *
     * @return int[]|\WP_Post[] An array of found templates.
     */
    public function get_block_templates_from_db($slugs = array(), $template_type = 'wp_template')
{
}
    /**
     * Gets the templates from the WooCommerce blocks directory, skipping those for which a template already exists
     * in the theme directory.
     *
     * @param string[] $slugs An array of slugs to filter templates by. Templates whose slug does not match will not be returned.
     * @param array    $already_found_templates Templates that have already been found, these are customised templates that are loaded from the database.
     * @param string   $template_type wp_template or wp_template_part.
     *
     * @return array Templates from the WooCommerce blocks plugin directory.
     */
    public function get_block_templates_from_woocommerce($slugs, $already_found_templates, $template_type = 'wp_template')
{
}
    /**
     * Get and build the block template objects from the block template files.
     *
     * @param array  $slugs An array of slugs to retrieve templates for.
     * @param string $template_type wp_template or wp_template_part.
     *
     * @return array WP_Block_Template[] An array of block template objects.
     */
    public function get_block_templates($slugs = array(), $template_type = 'wp_template')
{
}
    /**
     * Checks whether a block template with that name exists in Woo Blocks
     *
     * @param string $template_name Template to check.
     * @param array  $template_type wp_template or wp_template_part.
     *
     * @return boolean
     */
    public function block_template_is_available($template_name, $template_type = 'wp_template')
{
}
}