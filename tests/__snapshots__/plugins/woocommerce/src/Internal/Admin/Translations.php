<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Translations Class.
 */
class Translations
{
    /**
     * Class instance.
     *
     * @var Translations instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
{
}
    /**
     * Constructor.
     * Hooks added here should be removed in `wc_admin_initialize` via the feature plugin.
     */
    public function __construct()
{
}
    /**
     * Loads the required translation scripts on the correct pages.
     */
    public function potentially_load_translation_script_file()
{
}
    /**
     * Load translation strings from language packs for dynamic imports.
     *
     * @param string $file File location for the script being translated.
     * @param string $handle Script handle.
     * @param string $domain Text domain.
     *
     * @return string New file location for the script being translated.
     */
    public function load_script_translation_file($file, $handle, $domain)
{
}
    /**
     * Run when plugin is activated (can be WooCommerce or WooCommerce Admin).
     *
     * @param string $filename Activated plugin filename.
     */
    public function potentially_generate_translation_strings($filename)
{
}
    /**
     * Combine translation chunks when files are updated.
     *
     * This function combines JSON translation data auto-extracted by GlotPress
     * from Webpack-generated JS chunks into a single file that can be used in
     * subsequent requests. This is necessary since the JS chunks are not known
     * to WordPress via wp_register_script() and wp_set_script_translations().
     *
     * @param Language_Pack_Upgrader $instance Upgrader instance.
     * @param array                  $hook_extra Info about the upgraded language packs.
     */
    public function combine_translation_chunk_files($instance, $hook_extra)
{
}
}