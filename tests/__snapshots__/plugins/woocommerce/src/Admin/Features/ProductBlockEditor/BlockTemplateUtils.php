<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor;

/**
 * Utils for block templates.
 */
class BlockTemplateUtils
{
    const TEMPLATES_ROOT_DIR = 'templates';

    const DIRECTORY_NAMES = array (
  'TEMPLATES' => 'product-form',
  'TEMPLATE_PARTS' => 'product-form/parts',
);

    /**
     * Gets the directory where templates of a specific template type can be found.
     *
     * @param string $template_type wp_template or wp_template_part.
     * @return string
     */
    private static function get_templates_directory($template_type = 'wp_template')
{
}
    /**
     * Return the path to a block template file.
     * Otherwise, False.
     *
     * @param string $slug - Template slug.
     * @return string|bool   Path to the template file or false.
     */
    public static function get_block_template_path($slug)
{
}
    /**
     * Get the template data from the headers.
     *
     * @param string $file_path - File path.
     * @return array              Template data.
     */
    public static function get_template_file_data($file_path)
{
}
    /**
     * Get the template content from the file.
     *
     * @param string $file_path - File path.
     * @return string Content.
     */
    public static function get_template_content($file_path)
{
}
}