<?php
/**
 * WCCOM Site Installer Error Codes Class
 *
 * Stores data for errors, returned by installer API.
 */
class WC_REST_WCCOM_Site_Installer_Error_Codes
{
    public const NOT_AUTHENTICATED = 'not_authenticated';
    public const NO_ACCESS_TOKEN = 'no_access_token';
    public const NO_SIGNATURE = 'no_signature';
    public const SITE_NOT_CONNECTED = 'site_not_connnected';
    public const INVALID_TOKEN = 'invalid_token';
    public const REQUEST_VERIFICATION_FAILED = 'request_verification_failed';
    public const USER_NOT_FOUND = 'user_not_found';
    public const NO_PERMISSION = 'forbidden';
    public const IDEMPOTENCY_KEY_MISMATCH = 'idempotency_key_mismatch';
    public const NO_INITIATED_INSTALLATION_FOUND = 'no_initiated_installation_found';
    public const ALL_INSTALLATION_STEPS_RUN = 'all_installation_steps_run';
    public const REQUESTED_STEP_ALREADY_RUN = 'requested_step_already_run';
    public const PLUGIN_ALREADY_INSTALLED = 'plugin_already_installed';
    public const INSTALLATION_ALREADY_RUNNING = 'installation_already_running';
    public const INSTALLATION_FAILED = 'installation_failed';
    public const FILESYSTEM_REQUIREMENTS_NOT_MET = 'filesystem_requirements_not_met';
    public const FAILED_GETTING_PRODUCT_INFO = 'product_info_failed';
    public const INVALID_PRODUCT_INFO_RESPONSE = 'invalid_product_info_response';
    public const WCCOM_PRODUCT_MISSING_SUBSCRIPTION = 'wccom_product_missing_subscription';
    public const WCCOM_PRODUCT_MISSING_PACKAGE = 'wccom_product_missing_package';
    public const WPORG_PRODUCT_MISSING_DOWNLOAD_LINK = 'wporg_product_missing_download_link';
    public const MISSING_DOWNLOAD_PATH = 'missing_download_path';
    public const MISSING_UNPACKED_PATH = 'missing_unpacked_path';
    public const UNKNOWN_FILENAME = 'unknown_filename';
    public const PLUGIN_ACTIVATION_ERROR = 'plugin_activation_error';
    public const UNEXPECTED_ERROR = 'unexpected_error';
    public const FAILED_TO_RESET_INSTALLATION_STATE = 'failed_to_reset_installation_state';
    public const ERROR_MESSAGES = array (
  'not_authenticated' => 'Authentication required',
  'no_access_token' => 'No access token provided',
  'no_signature' => 'No signature provided',
  'site_not_connnected' => 'Site not connected to WooCommerce.com',
  'invalid_token' => 'Invalid access token provided',
  'request_verification_failed' => 'Request verification by signature failed',
  'user_not_found' => 'Token owning user not found',
  'forbidden' => 'You do not have permission to install plugin or theme',
  'idempotency_key_mismatch' => 'Idempotency key mismatch',
  'no_initiated_installation_found' => 'No initiated installation for the product found',
  'all_installation_steps_run' => 'All installation steps have been run',
  'requested_step_already_run' => 'Requested step has already been run',
  'plugin_already_installed' => 'The plugin has already been installed',
  'installation_already_running' => 'The installation of the plugin is already running',
  'installation_failed' => 'The installation of the plugin failed',
  'filesystem_requirements_not_met' => 'The filesystem requirements are not met',
  'product_info_failed' => 'Failed to retrieve product info from WooCommerce.com',
  'invalid_product_info_response' => 'Invalid product info response from WooCommerce.com',
  'wccom_product_missing_subscription' => 'Product subscription is missing',
  'wccom_product_missing_package' => 'Could not find product package',
  'missing_download_path' => 'Download path is missing',
  'missing_unpacked_path' => 'Unpacked path is missing',
  'unknown_filename' => 'Unknown product filename',
  'plugin_activation_error' => 'Plugin activation error',
  'unexpected_error' => 'Unexpected error',
  'failed_to_reset_installation_state' => 'Failed to reset installation state',
);
    public const HTTP_CODES = array (
  'not_authenticated' => 401,
  'no_access_token' => 400,
  'no_signature' => 400,
  'site_not_connnected' => 401,
  'invalid_token' => 401,
  'request_verification_failed' => 400,
  'user_not_found' => 401,
  'forbidden' => 403,
  'idempotency_key_mismatch' => 400,
  'no_initiated_installation_found' => 400,
  'all_installation_steps_run' => 400,
  'requested_step_already_run' => 400,
  'unexpected_error' => 500,
);
}
