<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductCatalogTemplate class.
 *
 * @internal
 */
class ProductCatalogTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplate
{
    const SLUG = 'archive-product';
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
     * Remove the template panel from the Sidebar of the Shop page because
     * the Site Editor handles it.
     *
     * @see https://github.com/woocommerce/woocommerce-gutenberg-products-block/issues/6278
     *
     * @param bool $is_support Whether the active theme supports block templates.
     *
     * @return bool
     */
    public function remove_block_template_support_for_shop_page($is_support)
{
}
}