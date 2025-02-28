<?php

namespace Automattic\WooCommerce\Internal\Font;

/**
 * Helper class for font face related functionality.
 *
 * @internal Just for internal use.
 */
class FontFace
{
    const POST_TYPE = 'wp_font_face';
    /**
     * Gets the installed font face by slug.
     *
     * @param string $slug The font face slug.
     * @return \WP_Post|null The font face post or null if not found.
     */
    public static function get_installed_font_faces_by_slug($slug)
{
}
    /**
     * Sanitizes a single src value for a font face.
     *
     * Copied from Gutenberg: https://github.com/WordPress/gutenberg/blob/8d94c3bd7af977d998466b56bd773f9b19de8d03/lib/compat/wordpress-6.5/fonts/class-wp-rest-font-faces-controller.php/#L837-L840
     *
     * @param string $value Font face src that is a URL or the key for a $_FILES array item.
     *
     * @return string Sanitized value.
     */
    private static function sanitize_src($value)
{
}
    /**
     * Handles file upload error.
     *
     * Copied from Gutenberg: https://github.com/WordPress/gutenberg/blob/b283c47dba96d74dd7589a823d8ab84c9e5a4765/lib/compat/wordpress-6.5/fonts/class-wp-rest-font-faces-controller.php/#L859-L883
     *
     * @param array  $file    File upload data.
     * @param string $message Error message from wp_handle_upload().
     * @return WP_Error WP_Error object.
     */
    private static function handle_font_file_upload_error($file, $message)
{
}
    /**
     * Handles the upload of a font file using wp_handle_upload().
     *
     * Copied from Gutenberg: https://github.com/WordPress/gutenberg/blob/f4889bf58ddeb8470c8d2a765f1b57229c515eda/lib/compat/wordpress-6.5/fonts/class-wp-rest-font-faces-controller.php/#L859-L896
     *
     * @param array $file Single file item from $_FILES.
     * @return array Array containing uploaded file attributes on success, or error on failure.
     */
    private static function handle_font_file_upload($file)
{
}
    /**
     * Downloads a file from a URL.
     *
     * @param string $file_url The file URL.
     **/
    private static function download_file($file_url)
{
}
    /**
     * Inserts a font face.
     *
     * @param array $font_face The font face settings.
     * @param int   $parent_font_family_id The parent font family ID.
     * @return \WP_Error|\WP_Post The inserted font face post or an error if the font face already exists.
     */
    public static function insert_font_face(array $font_face, int $parent_font_family_id)
{
}
    /**
     * Validates a font face.
     *
     * @param array $font_face The font face settings.
     * @return \WP_Error|null The error if the font family is invalid, null otherwise.
     */
    private static function validate_font_face($font_face)
{
}
}