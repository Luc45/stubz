<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * Utility methods used for serving block templates from WooCommerce Blocks.
 * {@internal This class and its methods should only be used within the BlockTemplateController.php and is not intended for public use.}
 */
class BlockTemplateUtils
{
    const DIRECTORY_NAMES = array (
  'DEPRECATED_TEMPLATES' => 'block-templates',
  'DEPRECATED_TEMPLATE_PARTS' => 'block-template-parts',
  'TEMPLATES' => 'templates',
  'TEMPLATE_PARTS' => 'parts',
);

    const TEMPLATES_ROOT_DIR = 'templates';

    const PLUGIN_SLUG = 'woocommerce/woocommerce';

    const DEPRECATED_PLUGIN_SLUG = 'woocommerce';

    /**
     * Returns the template matching the slug
     *
     * @param string $template_slug Slug of the template to retrieve.
     *
     * @return AbstractTemplate|AbstractTemplatePart|null
     */
    public static function get_template($template_slug)
    {
        // stub
    }

    /**
     * Returns an array containing the references of
     * the passed blocks and their inner blocks.
     *
     * @param array $blocks array of blocks.
     *
     * @return array block references to the passed blocks and their inner blocks.
     */
    public static function flatten_blocks(&$blocks)
    {
        // stub
    }

    /**
     * Parses wp_template content and injects the current theme's
     * stylesheet as a theme attribute into each wp_template_part
     *
     * @param string $template_content serialized wp_template content.
     *
     * @return string Updated wp_template content.
     */
    public static function inject_theme_attribute_in_content($template_content)
    {
        // stub
    }

    /**
     * Build a unified template object based a post Object.
     * Important: This method is an almost identical duplicate from wp-includes/block-template-utils.php as it was not intended for public use. It has been modified to build templates from plugins rather than themes.
     *
     * @param \WP_Post $post Template post.
     *
     * @return \WP_Block_Template|\WP_Error Template.
     */
    public static function build_template_result_from_post($post)
    {
        // stub
    }

    /**
     * Build a unified template object based on a theme file.
     *
     * @internal Important: This method is an almost identical duplicate from wp-includes/block-template-utils.php as it was not intended for public use. It has been modified to build templates from plugins rather than themes.
     *
     * @param array|object $template_file Theme file.
     * @param string       $template_type wp_template or wp_template_part.
     *
     * @return \WP_Block_Template Template.
     */
    public static function build_template_result_from_file($template_file, $template_type)
    {
        // stub
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
        // stub
    }

    /**
     * Finds all nested template part file paths in a theme's directory.
     *
     * @param string $template_type wp_template or wp_template_part.
     * @return array $path_list A list of paths to all template part files.
     */
    public static function get_template_paths($template_type)
    {
        // stub
    }

    /**
     * Gets the directory where templates of a specific template type can be found.
     *
     * @param string $template_type wp_template or wp_template_part.
     *
     * @return string
     */
    public static function get_templates_directory($template_type = 'wp_template')
    {
        // stub
    }

    /**
     * Returns template title.
     *
     * @param string $template_slug The template slug (e.g. single-product).
     * @return string Human friendly title.
     */
    public static function get_block_template_title($template_slug)
    {
        // stub
    }

    /**
     * Returns template description.
     *
     * @param string $template_slug The template slug (e.g. single-product).
     * @return string Template description.
     */
    public static function get_block_template_description($template_slug)
    {
        // stub
    }

    /**
     * Returns area for template parts.
     *
     * @param string $template_slug The template part slug (e.g. mini-cart).
     * @param string $template_type Either `wp_template` or `wp_template_part`.
     * @return string Template part area.
     */
    public static function get_block_template_area($template_slug, $template_type)
    {
        // stub
    }

    /**
     * Converts template paths into a slug
     *
     * @param string $path The template's path.
     * @return string slug
     */
    public static function generate_template_slug_from_path($path)
    {
        // stub
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
        // stub
    }

    /**
     * Check if the theme has a template. So we know if to load our own in or not.
     *
     * @param string $template_name name of the template file without .html extension e.g. 'single-product'.
     * @return boolean
     */
    public static function theme_has_template($template_name)
    {
        // stub
    }

    /**
     * Check if the theme has a template. So we know if to load our own in or not.
     *
     * @param string $template_name name of the template file without .html extension e.g. 'single-product'.
     * @return boolean
     */
    public static function theme_has_template_part($template_name)
    {
        // stub
    }

    /**
     * Checks to see if they are using a compatible version of WP, or if not they have a compatible version of the Gutenberg plugin installed.
     *
     * @param string $template_type Optional. Template type: `wp_template` or `wp_template_part`.
     *                              Default `wp_template`.
     * @return boolean
     */
    public static function supports_block_templates($template_type = 'wp_template')
    {
        // stub
    }

    /**
     * Checks if we can fall back to an `archive-product` template stored on the db for a given slug.
     *
     * @param string $template_slug Slug to check for fallbacks.
     * @param array  $db_templates Templates that have already been found on the db.
     * @return boolean
     */
    public static function template_is_eligible_for_fallback_from_db($template_slug, $db_templates)
    {
        // stub
    }

    /**
     * Gets the `archive-product` fallback template stored on the db for a given slug.
     *
     * @param string $template_slug Slug to check for fallbacks.
     * @param array  $db_templates Templates that have already been found on the db.
     * @return boolean|object
     */
    public static function get_fallback_template_from_db($template_slug, $db_templates)
    {
        // stub
    }

    /**
     * Checks if we can fall back to the `archive-product` file template for a given slug in the current theme.
     *
     * `taxonomy-product_cat`, `taxonomy-product_tag`, `taxonomy-attribute` templates can
     *  generally use the `archive-product` as a fallback if there are no specific overrides.
     *
     * @param string $template_slug Slug to check for fallbacks.
     * @return boolean
     */
    public static function template_is_eligible_for_fallback_from_theme($template_slug)
    {
        // stub
    }

    /**
     * Sets the `has_theme_file` to `true` for templates with fallbacks
     *
     * There are cases (such as tags, categories and attributes) in which fallback templates
     * can be used; so, while *technically* the theme doesn't have a specific file
     * for them, it is important that we tell Gutenberg that we do, in fact,
     * have a theme file (i.e. the fallback one).
     *
     * **Note:** this function changes the array that has been passed.
     *
     * It returns `true` if anything was changed, `false` otherwise.
     *
     * @param array  $query_result Array of template objects.
     * @param object $template A specific template object which could have a fallback.
     *
     * @return boolean
     */
    public static function set_has_theme_file_if_fallback_is_available($query_result, $template)
    {
        // stub
    }

    /**
     * Removes templates that were added to a theme's block-templates directory, but already had a customised version saved in the database.
     *
     * @param \WP_Block_Template[]|\stdClass[] $templates List of templates to run the filter on.
     *
     * @return array List of templates with duplicates removed. The customised alternative is preferred over the theme default.
     */
    public static function remove_theme_templates_with_custom_alternative($templates)
    {
        // stub
    }

    /**
     * Removes customized templates that shouldn't be available. That means customized templates based on the
     * WooCommerce default template when there is a customized template based on the theme template.
     *
     * @param \WP_Block_Template[]|\stdClass[] $templates  List of templates to run the filter on.
     * @param string                           $theme_slug Slug of the theme currently active.
     *
     * @return array Filtered list of templates with only relevant templates available.
     */
    public static function remove_duplicate_customized_templates($templates, $theme_slug)
    {
        // stub
    }

    /**
     * Returns whether the blockified templates should be used or not.
     * If the option is not stored on the db, we need to check if the current theme is a block one or not.
     *
     * @return boolean
     */
    public static function should_use_blockified_product_grid_templates()
    {
        // stub
    }

    /**
     * Determines whether the provided $blocks contains any of the $block_names,
     * or if they contain a pattern that contains any of the $block_names.
     *
     * @param string[]   $block_names Full block types to look for.
     * @param WP_Block[] $blocks      Array of block objects.
     * @return bool Whether the content contains the specified block.
     */
    public static function has_block_including_patterns($block_names, $blocks)
    {
        // stub
    }

    /**
     * Returns whether the passed `$template` has the legacy template block.
     *
     * @param object $template The template object.
     * @return boolean
     */
    public static function template_has_legacy_template_block($template)
    {
        // stub
    }

    /**
     * Updates the title, description and area of a template to the correct values and to make them more user-friendly.
     * For example, instead of:
     * - Title: `Tag (product_tag)`
     * - Description: `Displays taxonomy: Tag.`
     * we display:
     * - Title: `Products by Tag`
     * - Description: `Displays products filtered by a tag.`.
     *
     * @param WP_Block_Template $template The template object.
     * @param string            $template_type wp_template or wp_template_part.
     *
     * @return WP_Block_Template
     */
    public static function update_template_data($template, $template_type)
    {
        // stub
    }

    /**
     * Gets the templates saved in the database.
     *
     * @param array  $slugs An array of slugs to retrieve templates for.
     * @param string $template_type wp_template or wp_template_part.
     *
     * @return int[]|\WP_Post[] An array of found templates.
     */
    public static function get_block_templates_from_db($slugs = array (
), $template_type = 'wp_template')
    {
        // stub
    }

    /**
     * Gets the template part by slug
     *
     * @param string $slug The template part slug.
     *
     * @return string The template part content.
     */
    public static function get_template_part($slug)
    {
        // stub
    }

}

