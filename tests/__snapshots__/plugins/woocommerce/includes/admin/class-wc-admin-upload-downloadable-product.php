<?php

/**
 * WC_Admin_Upload_Downloadable_Product Class.
 */
class WC_Admin_Upload_Downloadable_Product
{
    /**
     * Add hooks.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Change upload dir for downloadable files.
     *
     * @param array $pathdata Array of paths.
     * @return array
     */
    public function upload_dir($pathdata)
    {
        // stub
    }

    /**
     * Change filename for WooCommerce uploads and prepend unique chars for security.
     *
     * @param string $full_filename Original filename.
     * @param string $ext           Extension of file.
     * @param string $dir           Directory path.
     *
     * @return string New filename with unique hash.
     * @since 4.0
     */
    public function update_filename($full_filename, $ext, $dir)
    {
        // stub
    }

    /**
     * Change filename to append random text.
     *
     * @param string $full_filename Original filename with extension.
     * @param string $ext           Extension.
     *
     * @return string Modified filename.
     */
    public function unique_filename($full_filename, $ext)
    {
        // stub
    }

    /**
     * Run a filter when uploading a downloadable product.
     */
    public function woocommerce_media_upload_downloadable_product()
    {
        // stub
    }

}
