<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Determines whether the Shipping Label Banner should be displayed
 */
class ShippingLabelBannerDisplayRules
{
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
}
