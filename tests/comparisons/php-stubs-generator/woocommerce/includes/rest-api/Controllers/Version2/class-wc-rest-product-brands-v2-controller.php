<?php

/**
 * REST API Brands controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Product_Categories_Controller
 */
class WC_REST_Product_Brands_V2_Controller extends \WC_REST_Product_Categories_V2_Controller
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'products/brands';
    /**
     * Taxonomy.
     *
     * @var string
     */
    protected $taxonomy = 'product_brand';
}