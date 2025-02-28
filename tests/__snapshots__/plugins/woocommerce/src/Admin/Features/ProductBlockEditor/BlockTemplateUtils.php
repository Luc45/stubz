<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor;

/**
 * Utils for block templates.
 */
class BlockTemplateUtils
{
    public const TEMPLATES_ROOT_DIR = 'templates';
    public const DIRECTORY_NAMES = array (
  'TEMPLATES' => 'product-form',
  'TEMPLATE_PARTS' => 'product-form/parts',
);
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