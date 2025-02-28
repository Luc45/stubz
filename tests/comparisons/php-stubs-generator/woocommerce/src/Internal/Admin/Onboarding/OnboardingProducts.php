<?php

namespace Automattic\WooCommerce\Internal\Admin\Onboarding;

/**
 * Class for handling product types and data around product types.
 */
class OnboardingProducts
{
    /**
     * Name of product data transient.
     *
     * @var string
     */
    public const PRODUCT_DATA_TRANSIENT = 'wc_onboarding_product_data';
    /**
     * Get a list of allowed product types for the onboarding wizard.
     *
     * @return array
     */
    public static function get_allowed_product_types()
    {
    }
    /**
     * Get dynamic product data from API.
     *
     * @param array $product_types Array of product types.
     * @return array
     */
    public static function get_product_data($product_types)
    {
    }
    /**
     * Get the allowed product types with the polled data.
     *
     * @return array
     */
    public static function get_product_types_with_data()
    {
    }
    /**
     * Get relevant purchaseable products for the site.
     *
     * @return array
     */
    public static function get_relevant_products()
    {
    }
}
