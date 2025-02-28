<?php
/**
 * WCCOM Site Installer Error Class
 */
class WC_REST_WCCOM_Site_Installer_Error extends \Exception
{
    /**
     * Constructor for the Installer Error class.
     *
     * @param string $error_code Error code.
     * @param string $error_message Error message.
     * @param int    $http_code HTTP status code.
     */
    public function __construct($error_code, $error_message = null, $http_code = null)
{
}
    /**
     * Get the error code.
     */
    public function get_error_code()
{
}
    /**
     * Get the error message.
     */
    public function get_error_message()
{
}
    /**
     * Get the HTTP status code.
     */
    public function get_http_code()
{
}
}
