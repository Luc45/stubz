<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductTagTemplate class.
 *
 * @internal
 */
class ProductTagTemplate
{
    const SLUG = 'taxonomy-product_tag';

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