<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the classes in the Internal\Admin\ProductReviews namespace.
 */
class ProductReviewsServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\Admin\ProductReviews\Reviews::class, \Automattic\WooCommerce\Internal\Admin\ProductReviews\ReviewsCommentsOverrides::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}