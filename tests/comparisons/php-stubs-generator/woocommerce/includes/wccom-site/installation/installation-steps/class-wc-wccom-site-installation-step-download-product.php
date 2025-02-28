<?php

/**
 * WC_WCCOM_Site_Installation_Step_Download_Product class
 */
class WC_WCCOM_Site_Installation_Step_Download_Product implements \WC_WCCOM_Site_Installation_Step
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
     * @throws Installer_Error Installer Error.
     */
    public function run()
    {
    }
}