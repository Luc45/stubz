<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ClassicTemplatesCompatibility class.
 *
 * To bridge the gap on compatibility with widget blocks and classic PHP core templates.
 *
 * @internal
 */
class ClassicTemplatesCompatibility
{
    /**
     * Instance of the asset data registry.
     *
     * @var AssetDataRegistry
     */
    protected $asset_data_registry;
    /**
     * Constructor.
     *
     * @param AssetDataRegistry $asset_data_registry Instance of the asset data registry.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry)
    {
    }
    /**
     * Initialization method.
     */
    protected function init()
    {
    }
    /**
     * Executes the methods which set the necessary data needed for filter blocks to work correctly as widgets in Classic templates.
     *
     * @return void
     */
    public function set_classic_template_data()
    {
    }
    /**
     * This method passes the value `has_filterable_products` to the front-end for product archive pages,
     * so that widget product filter blocks are aware of the context they are in and can render accordingly.
     *
     * @return void
     */
    public function set_filterable_product_data()
    {
    }
    /**
     * This method passes the value `is_rendering_php_template` to the front-end of Classic themes,
     * so that widget product filter blocks are aware of how to filter the products.
     *
     * This data only matters on WooCommerce product archive pages.
     * On non-archive pages the merchant could be using the All Products block which is not a PHP template.
     *
     * @return void
     */
    public function set_php_template_data()
    {
    }
}