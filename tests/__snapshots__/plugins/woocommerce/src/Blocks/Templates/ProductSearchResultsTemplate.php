<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductSearchResultsTemplate class.
 *
 * @internal
 */
class ProductSearchResultsTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplate
{
    public const SLUG = 'product-search-results';
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
     * When the search is for products and a block theme is active, render the Product Search Template.
     *
     * @param array $templates Templates that match the search hierarchy.
     */
    public function update_search_template_hierarchy($templates)
{
}
}