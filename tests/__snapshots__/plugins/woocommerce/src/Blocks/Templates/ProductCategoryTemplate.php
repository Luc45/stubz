<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductCategoryTemplate class.
 *
 * @internal
 */
class ProductCategoryTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplate
{
    const SLUG = 'taxonomy-product_cat';

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

}

