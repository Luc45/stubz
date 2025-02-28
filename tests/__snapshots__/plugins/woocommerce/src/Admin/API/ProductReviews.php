<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Product reviews controller.
 *
 * @internal
 * @extends WC_REST_Product_Reviews_Controller
 */
class ProductReviews extends \WC_REST_Product_Reviews_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';

    /**
     * Prepare links for the request.
     *
     * @param WP_Comment $review Product review object.
     * @return array Links for the given product review.
     */
    protected function prepare_links($review)
{
}
}