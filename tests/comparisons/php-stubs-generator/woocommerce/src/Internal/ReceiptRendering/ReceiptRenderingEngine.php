<?php

namespace Automattic\WooCommerce\Internal\ReceiptRendering;

/**
 * This class generates printable order receipts as transient files (see src/Internal/TransientFiles).
 * The template for the receipt is Templates/order-receipt.php, it uses the variables returned as array keys
 * 'get_order_data'.
 *
 * When a receipt is generated for an order with 'generate_receipt' the receipt file name is stored as order meta
 * (see RECEIPT_FILE_NAME_META_KEY) for later retrieval with 'get_existing_receipt'. Beware! The files pointed
 * by such meta keys could have expired and thus no longer exist. 'get_existing_receipt' will appropriately return null
 * if the meta entry exists but the file doesn't.
 */
class ReceiptRenderingEngine
{
    /**
     * Order meta key that stores the file name of the last generated receipt.
     */
    public const RECEIPT_FILE_NAME_META_KEY = '_receipt_file_name';
    /**
     * Initializes the class.
     *
     * @param TransientFilesEngine $transient_files_engine The instance of TransientFilesEngine to use.
     * @param LegacyProxy          $legacy_proxy The instance of LegacyProxy to use.
     * @internal
     */
    final public function init(\Automattic\WooCommerce\Internal\TransientFiles\TransientFilesEngine $transient_files_engine, \Automattic\WooCommerce\Proxies\LegacyProxy $legacy_proxy)
    {
    }
    /**
     * Get the (transient) file name of the receipt for an order, creating a new file if necessary.
     *
     * If $force_new is false, and a receipt file for the order already exists (as pointed by order meta key
     * RECEIPT_FILE_NAME_META_KEY), then the name of the already existing receipt file is returned.
     *
     * If $force_new is true, OR if it's false but no receipt file for the order exists (no order meta with key
     * RECEIPT_FILE_NAME_META_KEY exists, OR it exists but the file it points to doesn't), then a new receipt
     * transient file is created with the supplied expiration date (defaulting to "tomorrow"), and the new file name
     * is stored as order meta with the key RECEIPT_FILE_NAME_META_KEY.
     *
     * @param int|WC_Abstract_Order $order The order object or order id to get the receipt for.
     * @param string|int|null       $expiration_date GMT expiration date formatted as yyyy-mm-dd, or as a timestamp, or null for "tomorrow".
     * @param bool                  $force_new If true, creates a new receipt file even if one already exists for the order.
     * @return string|null The file name of the new or already existing receipt file, null if an order id is passed and the order doesn't exist.
     * @throws InvalidArgumentException Invalid expiration date (wrongly formatted, or it's a date in the past).
     * @throws Exception The directory to store the file doesn't exist and can't be created.
     */
    public function generate_receipt($order, $expiration_date = null, bool $force_new = false): ?string
    {
    }
    /**
     * Get the file name of an existing receipt file for an order.
     *
     * A receipt is considered to be available for the order if there's an order meta entry with key
     * RECEIPT_FILE_NAME_META_KEY AND the transient file it points to exists AND it has not expired.
     *
     * @param WC_Abstract_Order $order The order object or order id to get the receipt for.
     * @return string|null The receipt file name, or null if no receipt is currently available for the order.
     * @throws Exception Thrown if a wrong file path is passed.
     */
    public function get_existing_receipt($order): ?string
    {
    }
}
