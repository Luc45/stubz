<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductAttributeTemplate class.
 *
 * @internal
 */
class ProductAttributeTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplate
{
    const SLUG = 'taxonomy-product_attribute';

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
        // stub
    }

    /**
     * Returns the title of the template.
     *
     * @return string
     */
    public function get_template_title()
    {
        // stub
    }

    /**
     * Returns the description of the template.
     *
     * @return string
     */
    public function get_template_description()
    {
        // stub
    }

    /**
     * Renders the default block template from Woo Blocks if no theme templates exist.
     */
    public function render_block_template()
    {
        // stub
    }

    /**
     * Renders the Product by Attribute template for product attributes taxonomy pages.
     *
     * @param array $templates Templates that match the product attributes taxonomy.
     */
    public function update_taxonomy_template_hierarchy($templates)
    {
        // stub
    }

}

