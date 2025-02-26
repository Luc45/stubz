<?php

namespace Automattic\WooCommerce\Internal;

/**
 * Class to adjust download permissions on product save.
 */
class DownloadPermissionsAdjuster extends \
{
    /**
     * The downloads data store to use.
     *
     * @var WC_Data_Store
     */
    private $downloads_data_store = null;

    /**
     * Class initialization, to be executed when the class is resolved by the container.
     *
     * @internal
     */
    public final function init()
    {
        // stub
    }

    /**
     * Schedule a download permissions adjustment for a product if necessary.
     * This should be executed whenever a product is saved.
     *
     * @param \WC_Product $product The product to schedule a download permission adjustments for.
     */
    public function maybe_schedule_adjust_download_permissions(WC_Product $product)
    {
        // stub
    }

    /**
     * Create additional download permissions for variations if necessary.
     *
     * When a simple downloadable product is converted to a variable product,
     * existing download permissions are still present in the database but they don't apply anymore.
     * This method creates additional download permissions for the variations based on
     * the old existing ones for the main product.
     *
     * The procedure is as follows. For each existing download permission for the parent product,
     * check if there's any variation offering the same file for download (the file URL, not name, is checked).
     * If that is found, check if an equivalent permission exists (equivalent means for the same file and with
     * the same order id and customer id). If no equivalent permission exists, create it.
     *
     * @param int $product_id The id of the product to check permissions for.
     */
    public function adjust_download_permissions(int $product_id)
    {
        // stub
    }

    /**
     * Get the existing downloadable files and download permissions for a given product.
     * The returned value is an array with two keys:
     *
     * - download_ids_by_file_url: an associative array of file url => download_id.
     * - permission_data_by_file_order_user: an associative array where key is "file_url:customer_id:order_id" and value is the full permission data set.
     *
     * @param \WC_Product $product The product to get the downloadable files and permissions for.
     * @return array[] Information about the downloadable files and permissions for the product.
     */
    private function get_download_files_and_permissions(WC_Product $product)
    {
        // stub
    }

}

