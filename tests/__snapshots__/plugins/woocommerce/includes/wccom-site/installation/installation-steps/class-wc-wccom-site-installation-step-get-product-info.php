<?php

/**
 * WC_WCCOM_Site_Installation_Step_Get_Product_Info class
 */
class WC_WCCOM_Site_Installation_Step_Get_Product_Info
{
    /**
     * The current installation state.
     *
     * @var WC_WCCOM_Site_Installation_State
     */
    protected $state = null;

    /**
     * Constructor.
     *
     * @param array $state The current installation state.
     */
    public function __construct($state)
    {
        // stub
    }

    /**
     * Run the step installation process.
     *
     * @throws Installer_Error Installer Error.
     * @return array
     */
    public function run()
    {
        // stub
    }

    /**
     * Get download URL for wporg product.
     *
     * @param array $data Product data.
     *
     * @return string|null
     * @throws Installer_Error Installer Error.
     */
    protected function get_wporg_download_url($data)
    {
        // stub
    }

    /**
     * Get download URL for wccom product.
     *
     * @param int $product_id Product ID.
     *
     * @return string
     * @throws Installer_Error Installer Error.
     */
    protected function get_wccom_download_url($product_id)
    {
        // stub
    }

}
