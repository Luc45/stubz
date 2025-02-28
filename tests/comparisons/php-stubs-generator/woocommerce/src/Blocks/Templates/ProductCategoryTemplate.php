<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductCategoryTemplate class.
 *
 * @internal
 */
class ProductCategoryTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplate
{
    /**
     * The slug of the template.
     *
     * @var string
     */
    const SLUG = 'taxonomy-product_cat';
    /**
     * The template used as a fallback if that one is customized.
     *
     * @var string
     */
    public $fallback_template = \Automattic\WooCommerce\Blocks\Templates\ProductCatalogTemplate::SLUG;
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