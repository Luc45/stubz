<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * MiniCartTemplate class.
 *
 * @internal
 */
class MiniCartTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplatePart
{
    public const SLUG = 'mini-cart';
    /**
     * The template part area where the template part belongs.
     *
     * @var string
     */
    public $template_area = 'mini-cart';
    /**
     * Initialization method.
     */
    public function init()
{
}
    /**
     * Returns the title of the template.
     *
     * @return string
     */
    public function get_template_title()
{
}
    /**
     * Returns the description of the template.
     *
     * @return string
     */
    public function get_template_description()
{
}
    /**
     * Add Mini-Cart to the default template part areas.
     *
     * @param array $default_area_definitions An array of supported area objects.
     * @return array The supported template part areas including the Mini-Cart one.
     */
    public function register_mini_cart_template_part_area($default_area_definitions)
{
}
}