<?php

namespace Automattic\WooCommerce\Internal\Font;

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