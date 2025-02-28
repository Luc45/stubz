<?php

namespace Automattic\WooCommerce\Internal\Font;

// IMPORTANT: We have to switch to the WordPress API to create the FontFace post type when they will be implemented: https://github.com/WordPress/gutenberg/issues/58670!
/**
 * Helper class for font face related functionality.
 *
 * @internal Just for internal use.
 */
class FontFace
{
    public const POST_TYPE = 'wp_font_face';
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
     * Inserts a font face.
     *
     * @param array $font_face The font face settings.
     * @param int   $parent_font_family_id The parent font family ID.
     * @return \WP_Error|\WP_Post The inserted font face post or an error if the font face already exists.
     */
    public static function insert_font_face(array $font_face, int $parent_font_family_id)
    {
    }
}
