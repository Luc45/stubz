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
     * Plugin domain.
     *
     * @var string
     */
    private static $plugin_domain = 'woocommerce';

    /**
     * Get class instance.
     */
    public static function get_instance()
    {
        // stub
    }

    /**
     * Constructor.
     * Hooks added here should be removed in `wc_admin_initialize` via the feature plugin.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Generate a filename to cache translations from JS chunks.
     *
     * @param string $domain Text domain.
     * @param string $locale Locale being retrieved.
     * @return string Filename.
     */
    private function get_combined_translation_filename($domain, $locale)
    {
        // stub
    }

    /**
     * Combines data from translation chunk files based on officially downloaded file format.
     *
     * @param array $json_i18n_filenames List of JSON chunk files.
     * @return array Combined translation chunk data.
     */
    private function combine_official_translation_chunks($json_i18n_filenames)
    {
        // stub
    }

    /**
     * Combines data from translation chunk files based on user-generated file formats,
     * such as wp-cli tool or Loco Translate plugin.
     *
     * @param array $json_i18n_filenames List of JSON chunk files.
     * @return array Combined translation chunk data.
     */
    private function combine_user_translation_chunks($json_i18n_filenames)
    {
        // stub
    }

    /**
     * Find and combine translation chunk files.
     *
     * Only targets files that aren't represented by a registered script (e.g. not passed to wp_register_script()).
     *
     * @param string $lang_dir Path to language files.
     * @param string $domain Text domain.
     * @param string $locale Locale being retrieved.
     * @return array Combined translation chunk data.
     */
    private function get_translation_chunk_data($lang_dir, $domain, $locale)
    {
        // stub
    }

    /**
     * Combine and save translations for a specific locale.
     *
     * Note that this assumes \WP_Filesystem is already initialized with write access.
     *
     * @param string $language_dir Path to language files.
     * @param string $plugin_domain Text domain.
     * @param string $locale Locale being retrieved.
     */
    private function build_and_save_translations($language_dir, $plugin_domain, $locale)
    {
        // stub
    }

    /**
     * Combine translation chunks when plugin is activated.
     *
     * This function combines JSON translation data auto-extracted by GlotPress
     * from Webpack-generated JS chunks into a single file. This is necessary
     * since the JS chunks are not known to WordPress via wp_register_script()
     * and wp_set_script_translations().
     */
    private function generate_translation_strings()
    {
        // stub
    }

    /**
     * Loads the required translation scripts on the correct pages.
     */
    public function potentially_load_translation_script_file()
    {
        // stub
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
        // stub
    }

    /**
     * Run when plugin is activated (can be WooCommerce or WooCommerce Admin).
     *
     * @param string $filename Activated plugin filename.
     */
    public function potentially_generate_translation_strings($filename)
    {
        // stub
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
        // stub
    }

}