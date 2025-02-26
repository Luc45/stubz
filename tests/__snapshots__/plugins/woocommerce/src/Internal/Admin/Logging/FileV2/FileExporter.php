<?php

namespace Automattic\WooCommerce\Internal\Admin\Logging\FileV2;

/**
 * FileExport class.
 */
class FileExporter extends \
{
    /**
     * The absolute path of the file.
     *
     * @var string
     */
    private $path = null;

    /**
     * A name of the file to send to the browser rather than the filename part of the path.
     *
     * @var string
     */
    private $alternate_filename = null;

    /**
     * Class FileExporter.
     *
     * @param string $path               The absolute path of the file.
     * @param string $alternate_filename Optional. The name of the file to send to the browser rather than the filename
     *                                   part of the path.
     */
    public function __construct(string $path, string $alternate_filename = '')
    {
        // stub
    }

    /**
     * Configure PHP and stream the file to the browser.
     *
     * @return WP_Error|void Only returns something if there is an error.
     */
    public function emit_file()
    {
        // stub
    }

    /**
     * Send HTTP headers at the beginning of a file.
     *
     * Modeled on WC_CSV_Exporter::send_headers().
     *
     * @return void
     */
    private function send_headers(): void
    {
        // stub
    }

    /**
     * Send the contents of the file.
     *
     * @return void
     */
    private function send_contents(): void
    {
        // stub
    }

    /**
     * Get the name of the file that will be sent to the browser.
     *
     * @return string
     */
    private function get_filename(): string
    {
        // stub
    }

}

