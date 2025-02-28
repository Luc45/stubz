<?php

/**
 * Download handler class.
 */
class WC_Download_Handler
{
    /**
     * The hook used for deferred tracking of partial download attempts.
     */
    public const TRACK_DOWNLOAD_CALLBACK = 'track_partial_download';
    /**
     * Hook in methods.
     */
    public static function init()
    {
    }
    /**
     * Check if we need to download a file and check validity.
     */
    public static function download_product()
    {
    }
    /**
     * Count download.
     *
     * @deprecated 4.4.0
     * @param array $download_data Download data.
     */
    public static function count_download($download_data)
    {
    }
    /**
     * Download a file - hook into init function.
     *
     * @param string  $file_path  URL to file.
     * @param integer $product_id Product ID of the product being downloaded.
     */
    public static function download($file_path, $product_id)
    {
    }
    /**
     * Redirect to a file to start the download.
     *
     * @param string $file_path File path.
     * @param string $filename  File name.
     */
    public static function download_file_redirect($file_path, $filename = '')
    {
    }
    /**
     * Parse file path and see if its remote or local.
     *
     * @param  string $file_path File path.
     * @return array
     */
    public static function parse_file_path($file_path)
    {
    }
    /**
     * Download a file using X-Sendfile, X-Lighttpd-Sendfile, or X-Accel-Redirect if available.
     *
     * @param string $file_path File path.
     * @param string $filename  File name.
     */
    public static function download_file_xsendfile($file_path, $filename)
    {
    }
    /**
     * Parse the HTTP_RANGE request from iOS devices.
     * Does not support multi-range requests.
     *
     * @param int $file_size Size of file in bytes.
     * @return array {
     *     Information about range download request: beginning and length of
     *     file chunk, whether the range is valid/supported and whether the request is a range request.
     *
     *     @type int  $start            Byte offset of the beginning of the range. Default 0.
     *     @type int  $length           Length of the requested file chunk in bytes. Optional.
     *     @type bool $is_range_valid   Whether the requested range is a valid and supported range.
     *     @type bool $is_range_request Whether the request is a range request.
     * }
     */
    protected static function get_download_range($file_size)
    {
    }
    /**
     * Force download - this is the default method.
     *
     * @param string $file_path File path.
     * @param string $filename  File name.
     */
    public static function download_file_force($file_path, $filename)
    {
    }
    /**
     * Read file chunked.
     *
     * Reads file in chunks so big downloads are possible without changing PHP.INI - http://codeigniter.com/wiki/Download_helper_for_large_files/.
     *
     * @param  string $file   File.
     * @param  int    $start  Byte offset/position of the beginning from which to read from the file.
     * @param  int    $length Length of the chunk to be read from the file in bytes, 0 means full file.
     * @return bool Success or fail
     */
    public static function readfile_chunked($file, $start = 0, $length = 0)
    {
    }
    /**
     * Filter headers for IE to fix issues over SSL.
     *
     * IE bug prevents download via SSL when Cache Control and Pragma no-cache headers set.
     *
     * @param array $headers HTTP headers.
     * @return array
     */
    public static function ie_nocache_headers_fix($headers)
    {
    }
    /**
     * Takes care of tracking download requests, with support for deferring tracking in the case of
     * partial (ranged request) downloads.
     *
     * @param WC_Customer_Download|int $download        The download to be tracked.
     * @param int|null                 $user_id         The user ID, if known.
     * @param string|null              $user_ip_address The download IP address, if known.
     * @param bool                     $defer           If tracking the download should be deferred.
     *
     * @return void
     * @throws Exception If the active version of Action Scheduler is less than 3.6.0.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public static function track_download($download, $user_id = \null, $user_ip_address = \null, bool $defer = \false) : void
    {
    }
}