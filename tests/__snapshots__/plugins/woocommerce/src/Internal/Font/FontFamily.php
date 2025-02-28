<?php

namespace Automattic\WooCommerce\Internal\Font;

/**
 * Helper class for font family related functionality.
 *
 * @internal Just for internal use.
 */
class FontFamily
{
    public const POST_TYPE = 'wp_font_family';
    /**
     * Registers the font family post type.
     *
     * @param array $font_family_settings The font family settings.
     */
    public static function insert_font_family(array $font_family_settings)
{
}
    /**
     * Gets a font family by name.
     *
     * @param string $name The font family slug.
     * @return \WP_Post|null The font family post or null if not found.
     */
    public static function get_font_family_by_name($name)
{
}
}