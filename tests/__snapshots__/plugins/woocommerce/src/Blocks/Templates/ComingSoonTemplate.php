<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ComingSoonTemplate class.
 *
 * @internal
 */
class ComingSoonTemplate
{
    const SLUG = 'coming-soon';

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
     * Returns the page object assigned to this template/page.
     *
     * @return \WP_Post|null Post object or null.
     */
    protected function get_placeholder_page()
    {
        // stub
    }

    /**
     * True when viewing the coming soon page.
     *
     * @return boolean
     */
    protected function is_active_template()
    {
        // stub
    }

}