<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * CheckoutTemplate class.
 *
 * @internal
 */
class CheckoutTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractPageTemplate
{
    const SLUG = 'page-checkout';

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
     * Returns the page object assigned to this template/page.
     *
     * @return \WP_Post|null Post object or null.
     */
    protected function get_placeholder_page()
    {
        // stub
    }

    /**
     * True when viewing the checkout page or checkout endpoint.
     *
     * @return boolean
     */
    protected function is_active_template()
    {
        // stub
    }

    /**
     * When the page should be displaying the template, add it to the hierarchy.
     *
     * This places the template name e.g. `cart`, at the beginning of the template hierarchy array. The hook priority
     * is 1 to ensure it runs first; other consumers e.g. extensions, could therefore inject their own template instead
     * of this one when using the default priority of 10.
     *
     * @param array $templates Templates that match the pages_template_hierarchy.
     */
    public function page_template_hierarchy($templates)
    {
        // stub
    }

}

