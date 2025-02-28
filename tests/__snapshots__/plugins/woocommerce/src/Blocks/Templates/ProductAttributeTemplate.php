<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductAttributeTemplate class.
 *
 * @internal
 */
class ProductAttributeTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplate
{
    /**
     * The slug of the template.
     *
     * @var string
     */
    public const SLUG = 'taxonomy-product_attribute';
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
    /**
     * Renders the Product by Attribute template for product attributes taxonomy pages.
     *
     * @param array $templates Templates that match the product attributes taxonomy.
     */
    public function update_taxonomy_template_hierarchy($templates)
{
}
}