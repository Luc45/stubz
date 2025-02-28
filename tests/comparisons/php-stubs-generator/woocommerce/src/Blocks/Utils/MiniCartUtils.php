<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * Utility methods used for the Mini Cart block.
 */
class MiniCartUtils
{
    /**
     * Migrate attributes to color panel component format.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     * @return array Reformatted attributes that are compatible with the color panel component.
     */
    public static function migrate_attributes_to_color_panel($attributes)
    {
    }
    /**
     * Get the SVG icon for the mini cart.
     *
     * @param string $icon_name The name of the icon.
     * @param string $icon_color The color of the icon.
     * @return string The SVG icon.
     */
    public static function get_svg_icon($icon_name, $icon_color = 'currentColor')
    {
    }
}
