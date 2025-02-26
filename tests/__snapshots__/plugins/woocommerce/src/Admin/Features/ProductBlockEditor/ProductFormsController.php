<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor;

/**
 * Handle retrieval of product forms.
 */
class ProductFormsController extends \
{
    /**
     * Product form templates.
     *
     * @var array
     */
    private $product_form_templates = array(
  0 => 'simple',
);

    /**
     * Set up the product forms controller.
     */
    public function init()
    {
        // stub
    }

    /**
     * Migrate form templates after WooCommerce plugin update.
     *
     * @param \WP_Upgrader $upgrader The WP_Upgrader instance.
     * @param array        $hook_extra Extra arguments passed to hooked filters.
     * @return void
     */
    public function migrate_templates_when_plugin_updated(WP_Upgrader $upgrader, array $hook_extra)
    {
        // stub
    }

    /**
     * Create or update a product_form post for each product form template.
     * If the post already exists, it will be updated.
     * If the post does not exist, it will be created even if the action is `update`.
     *
     * @param string $action - The action to perform. `insert` | `update`.
     * @return void
     */
    public function migrate_product_form_posts($action)
    {
        // stub
    }

}

