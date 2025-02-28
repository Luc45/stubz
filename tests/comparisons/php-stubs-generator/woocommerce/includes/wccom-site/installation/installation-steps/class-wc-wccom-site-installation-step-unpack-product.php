<?php

/**
 * WC_WCCOM_Site_Installation_Step_Unpack_Product class
 */
class WC_WCCOM_Site_Installation_Step_Unpack_Product implements \WC_WCCOM_Site_Installation_Step
{
    /**
     * The current installation state.
     *
     * @var WC_WCCOM_Site_Installation_State
     */
    protected $state;
    /**
     * Constructor.
     *
     * @param array $state The current installation state.
     */
    public function __construct($state)
    {
    }
    /**
     * Run the step installation process.
     *
     * @return WC_WCCOM_Site_Installation_State
     * @throws WC_REST_WCCOM_Site_Installer_Error If the package unpacked path is not returned.
     */
    public function run()
    {
    }
}
