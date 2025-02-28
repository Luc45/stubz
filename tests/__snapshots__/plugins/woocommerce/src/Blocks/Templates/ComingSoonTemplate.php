<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ComingSoonTemplate class.
 *
 * @internal
 */
class ComingSoonTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractPageTemplate
{
    const SLUG = 'coming-soon';

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
     * Returns the page object assigned to this template/page.
     *
     * @return \WP_Post|null Post object or null.
     */
    protected function get_placeholder_page()
{
}
    /**
     * True when viewing the coming soon page.
     *
     * @return boolean
     */
    protected function is_active_template()
{
}
}