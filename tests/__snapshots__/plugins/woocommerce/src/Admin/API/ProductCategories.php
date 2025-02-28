<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Product categories controller.
 *
 * @internal
 * @extends WC_REST_Product_Categories_Controller
 */
class ProductCategories extends \WC_REST_Product_Categories_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';

}