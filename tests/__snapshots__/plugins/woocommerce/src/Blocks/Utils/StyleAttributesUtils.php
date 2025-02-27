<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * StyleAttributesUtils class used for getting class and style from attributes.
 */
class StyleAttributesUtils
{
    const EMPTY_STYLE = array (
  'class' => '',
  'style' => '',
  'value' => '',
);

    /**
     * If color value is in preset format, convert it to a CSS var. Else return same value
     * For example:
     * "var:preset|color|pale-pink" -> "var(--wp--preset--color--pale-pink)"
     * "#98b66e" -> "#98b66e"
     *
     * @param string $color_value value to be processed.
     *
     * @return (string)
     */
    public static function get_color_value($color_value)
    {
        // stub
    }

    /**
     * Get CSS value for color preset.
     *
     * @param string $preset_name Preset name.
     *
     * @return string CSS value for color preset.
     */
    public static function get_preset_value($preset_name)
    {
        // stub
    }

    /**
     * If spacing value is in preset format, convert it to a CSS var. Else return same value
     * For example:
     * "var:preset|spacing|50" -> "var(--wp--preset--spacing--50)"
     * "50px" -> "50px"
     *
     * @param string $spacing_value value to be processed.
     *
     * @return (string)
     */
    public static function get_spacing_value($spacing_value)
    {
        // stub
    }

    /**
     * Get class and style for align from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_align_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for background-color from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_background_color_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Join classes and styles while removing duplicates and null values.
     *
     * @param array $rules Array of classes or styles.
     * @return array
     */
    protected static function join_styles($rules)
    {
        // stub
    }

    /**
     * Get class and style for border-color from attributes.
     *
     * Data passed to this function is not always consistent. It can be:
     * Linked - preset color: $attributes['borderColor'] => 'luminous-vivid-orange'.
     * Linked - custom color: $attributes['style']['border']['color'] => '#681228'.
     * Unlinked - preset color: $attributes['style']['border']['top']['color'] => 'var:preset|color|luminous-vivid-orange'
     * Unlinked - custom color: $attributes['style']['border']['top']['color'] => '#681228'.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_border_color_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for border-radius from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_border_radius_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for border width from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_border_width_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for border width from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_border_style_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get space-separated classes from block attributes.
     *
     * @param array $attributes Block attributes.
     * @param array $properties Properties to get classes from.
     *
     * @return string Space-separated classes.
     */
    public static function get_classes_by_attributes($attributes, $properties = array (
))
    {
        // stub
    }

    /**
     * Get class and style for font-family from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_font_family_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for font-size from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_font_size_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for font-style from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_font_style_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for font-weight from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_font_weight_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for letter-spacing from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_letter_spacing_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for line height from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_line_height_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get a value from an array based on a path e.g style.elements.link
     *
     * @param array  $array Target array.
     * @param string $path Path joined by delimiter.
     * @param string $delimiter Chosen delimiter defaults to ".".
     * @return mixed
     */
    protected static function array_get_value_by_path(array &$array, $path, $delimiter = '.')
    {
        // stub
    }

    /**
     * Get class and style for link-color from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_link_color_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for link-hover-color from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_link_hover_color_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for margin from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_margin_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for padding from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return array
     */
    public static function get_padding_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get space-separated style rules from block attributes.
     *
     * @param array $attributes Block attributes.
     * @param array $properties Properties to get styles from.
     *
     * @return string Space-separated style rules.
     */
    public static function get_styles_by_attributes($attributes, $properties = array (
))
    {
        // stub
    }

    /**
     * Get class and style for text align from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_text_align_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for text-color from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_text_color_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for text-decoration from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return array
     */
    public static function get_text_decoration_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get class and style for text-transform from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_text_transform_class_and_style($attributes)
    {
        // stub
    }

    /**
     * Get extra CSS classes from attributes.
     *
     * @param array $attributes Block attributes.
     * @return array
     */
    public static function get_classes_from_attributes($attributes)
    {
        // stub
    }

    /**
     * Get classes and styles from attributes.
     *
     * Excludes link_color and link_hover_color since those should not apply to the container.
     *
     * @param array $attributes Block attributes.
     * @param array $properties Properties to get classes/styles from.
     * @param array $exclude Properties to exclude.
     * @return array
     */
    public static function get_classes_and_styles_by_attributes($attributes, $properties = array (
), $exclude = array (
))
    {
        // stub
    }

}