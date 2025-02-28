<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Determines whether the Shipping Label Banner should be displayed
 */
class ShippingLabelBannerDisplayRules
{
    /**
     * Whether the site is connected to wordpress.com.
     *
     * @var bool
     */
    private $dotcom_connected = null;

    /**
     * Whether installed plugins are incompatible with the banner.
     *
     * @var bool
     */
    private $no_incompatible_plugins_installed = null;

    /**
     * Holds the installed WooCommerce Shipping & Tax version.
     *
     * @var string
     */
    private $wcs_version = null;

    /**
     * Supported countries by USPS, see: https://webpmt.usps.gov/pmt010.cfm
     *
     * @var array
     */
    private $supported_countries = array (
  0 => 'US',
  1 => 'AS',
  2 => 'PR',
  3 => 'VI',
  4 => 'GU',
  5 => 'MP',
  6 => 'UM',
  7 => 'FM',
  8 => 'MH',
);

    /**
     * Array of supported currency codes.
     *
     * @var array
     */
    private $supported_currencies = array (
  0 => 'USD',
);

    /**
     * Constructor.
     *
     * @param bool        $dotcom_connected Is site connected to wordpress.com?.
     * @param string|null $wcs_version Installed WooCommerce Shipping version to check, null if not installed.
     * @param bool        $incompatible_plugins_installed Are there any incompatible plugins installed?.
     */
    public function __construct($dotcom_connected, $wcs_version, $incompatible_plugins_installed)
{
}
    /**
     * Determines whether banner is eligible for display (does not include a/b logic).
     */
    public function should_display_banner()
{
}
    /**
     * Checks if the banner was not dismissed by the user.
     *
     * @return bool
     */
    private function banner_not_dismissed()
{
}
    /**
     * Checks if there's a shippable product in the current order.
     *
     * @return bool
     */
    private function order_has_shippable_products()
{
}
    /**
     * Checks if the store is in the US and has its default currency set to USD.
     *
     * @return bool
     */
    private function store_in_us_and_usd()
{
}
    /**
     * Checks if WooCommerce Shipping & Tax is not installed.
     *
     * @return bool
     */
    private function wcs_not_installed()
{
}
}