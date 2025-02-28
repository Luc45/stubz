<?php

/**
 * WC_WCCOM_Site_Installation_Manager class
 */
class WC_WCCOM_Site_Installation_Manager
{
    public const STEPS = array('get_product_info', 'download_product', 'unpack_product', 'move_product', 'activate_product');
    /**
     * The product ID.
     *
     * @var int
     */
    protected $product_id;
    /**
     * The idempotency key.
     *
     * @var string
     */
    protected $idempotency_key;
    /**
     * Constructor.
     *
     * @param int    $product_id The product ID.
     * @param string $idempotency_key The idempotency key.
     */
    public function __construct(int $product_id, string $idempotency_key)
    {
    }
    /**
     * Run the installation.
     *
     * @param string $run_until_step The step to run until.
     * @return bool
     * @throws WC_REST_WCCOM_Site_Installer_Error If installation failed to run.
     */
    public function run_installation(string $run_until_step): bool
    {
    }
    /**
     * Get the next step to run.
     *
     * @return bool
     * @throws WC_REST_WCCOM_Site_Installer_Error If the installation cannot be rest.
     */
    public function reset_installation(): bool
    {
    }
    /**
     * Check if the installation can be run.
     *
     * @param string                           $run_until_step Run until this step.
     * @param WC_WCCOM_Site_Installation_State $state Installation state.
     * @return void
     * @throws WC_REST_WCCOM_Site_Installer_Error If the installation cannot be run.
     */
    protected function can_run_installation($run_until_step, $state)
    {
    }
    /**
     * Get the next step to run.
     *
     * @param WC_WCCOM_Site_Installation_State $state Installation state.
     * @return string
     */
    protected function get_next_step($state): string
    {
    }
    /**
     * Get the steps to run.
     *
     * @param string $start_step The step to start from.
     * @param string $end_step  The step to end at.
     * @return string[]
     */
    protected function get_installation_steps(string $start_step, string $end_step)
    {
    }
    /**
     * Run the step.
     *
     * @param string                           $step_name Step name.
     * @param WC_WCCOM_Site_Installation_State $state Installation state.
     * @return void
     * @throws WC_REST_WCCOM_Site_Installer_Error If the step fails.
     */
    protected function run_step($step_name, $state)
    {
    }
}
