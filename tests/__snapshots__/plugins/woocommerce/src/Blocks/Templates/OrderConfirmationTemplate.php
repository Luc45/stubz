<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * OrderConfirmationTemplate class.
 *
 * @internal
 */
class OrderConfirmationTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractPageTemplate
{
    /**
     * The slug of the template.
     *
     * @var string
     */
    public const SLUG = 'order-confirmation';
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
     * Remove edit page from admin bar.
     */
    public function remove_edit_page_link()
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
     * True when viewing the Order Received endpoint.
     *
     * @return boolean
     */
    protected function is_active_template()
{
}
}