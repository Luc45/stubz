<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * OrderConfirmationTemplate class.
 *
 * @internal
 */
class OrderConfirmationTemplate
{
    const SLUG = 'order-confirmation';

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
     * Remove edit page from admin bar.
     */
    public function remove_edit_page_link()
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
     * True when viewing the Order Received endpoint.
     *
     * @return boolean
     */
    protected function is_active_template()
    {
        // stub
    }

}

