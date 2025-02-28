<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductTagTemplate class.
 *
 * @internal
 */
class ProductTagTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplate
{
    public const SLUG = 'taxonomy-product_tag';
    /**
     * The template used as a fallback if that one is customized.
     *
     * @var string
     */
    public $fallback_template;
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
     * Renders the default block template from Woo Blocks if no theme templates exist.
     */
    public function render_block_template()
{
}
}