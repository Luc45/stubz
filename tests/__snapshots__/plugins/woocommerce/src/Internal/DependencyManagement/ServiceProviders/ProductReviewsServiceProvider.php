<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the classes in the Internal\Admin\ProductReviews namespace.
 */
class ProductReviewsServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Admin\\ProductReviews\\Reviews',
  1 => 'Automattic\\WooCommerce\\Internal\\Admin\\ProductReviews\\ReviewsCommentsOverrides',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}