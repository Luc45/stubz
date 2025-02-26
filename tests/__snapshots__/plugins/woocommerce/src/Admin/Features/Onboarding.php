<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Contains backend logic for the onboarding profile and checklist feature.
 *
 * @deprecated since 6.3.0, use WooCommerce\Internal\Admin\Onboarding.
 */
class Onboarding
{
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = 'Automattic\\WooCommerce\\Admin\\Features\\Onboarding';

    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '6.3.0';

    /**
     * Hook into WooCommerce.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Get a list of allowed industries for the onboarding wizard.
     *
     * @deprecated 6.3.0
     * @return array
     */
    public static function get_allowed_industries()
    {
        // stub
    }

    /**
     * Get a list of allowed product types for the onboarding wizard.
     *
     * @deprecated 6.3.0
     * @return array
     */
    public static function get_allowed_product_types()
    {
        // stub
    }

    /**
     * Get a list of themes for the onboarding wizard.
     *
     * @deprecated 6.3.0
     * @return array
     */
    public static function get_themes()
    {
        // stub
    }

    /**
     * Get theme data used in onboarding theme browser.
     *
     * @deprecated 6.3.0
     * @param WP_Theme $theme Theme to gather data from.
     * @return array
     */
    public static function get_theme_data($theme)
    {
        // stub
    }

    /**
     * Gets an array of themes that can be installed & activated via the onboarding wizard.
     *
     * @deprecated 6.3.0
     * @return array
     */
    public static function get_allowed_themes()
    {
        // stub
    }

    /**
     * Get dynamic product data from API.
     *
     * @deprecated 6.3.0
     * @param array $product_types Array of product types.
     * @return array
     */
    public static function get_product_data($product_types)
    {
        // stub
    }

}

