<?php

namespace Automattic\WooCommerce\Internal\Admin\Logging\FileV2;

/**
 * FileExport class.
 */
class FileExporter
{
    /**
     * Class FileExporter.
     *
     * @param string $path               The absolute path of the file.
     * @param string $alternate_filename Optional. The name of the file to send to the browser rather than the filename
     *                                   part of the path.
     */
    public function __construct(string $path, string $alternate_filename = '')
    {
    }
    /**
     * Configure PHP and stream the file to the browser.
     *
     * @return WP_Error|void Only returns something if there is an error.
     */
    public function emit_file()
    {
    }
}