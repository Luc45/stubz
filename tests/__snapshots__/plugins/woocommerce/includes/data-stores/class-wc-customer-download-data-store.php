<?php

namespace ;

/**
 * WC Customer Download Data Store.
 *
 * @version  3.0.0
 */
class WC_Customer_Download_Data_Store
{
    const DOWNLOAD_PERMISSION_DB_FIELDS = array (
  0 => 'download_id',
  1 => 'product_id',
  2 => 'user_id',
  3 => 'user_email',
  4 => 'order_id',
  5 => 'order_key',
  6 => 'downloads_remaining',
  7 => 'access_granted',
  8 => 'download_count',
  9 => 'access_expires',
);

    /**
     * Create download permission for a user, from an array of data.
     *
     * @param array $data Data to create the permission for.
     * @returns int The database id of the created permission, or false if the permission creation failed.
     */
    public function create_from_data($data)
    {
        // stub
    }

    /**
     * Create download permission for a user.
     *
     * @param WC_Customer_Download $download WC_Customer_Download object.
     */
    public function create(&$download)
    {
        // stub
    }

    /**
     * Create download permission for a user, from an array of data.
     * Assumes that all the keys in the passed data are valid.
     *
     * @param array $data Data to create the permission for.
     * @return int The database id of the created permission, or false if the permission creation failed.
     */
    private function insert_new_download_permission($data)
    {
        // stub
    }

    /**
     * Adjust a date value to be inserted in the database.
     *
     * @param mixed $date The date value. Can be a WC_DateTime, a timestamp, or anything else that "date" recognizes.
     * @return string The date converted to 'Y-m-d' format.
     * @throws Exception The passed value can't be converted to a date.
     */
    private function adjust_date_for_db($date)
    {
        // stub
    }

    /**
     * Method to read a download permission from the database.
     *
     * @param WC_Customer_Download $download WC_Customer_Download object.
     *
     * @throws Exception Throw exception if invalid download is passed.
     */
    public function read(&$download)
    {
        // stub
    }

    /**
     * Method to update a download in the database.
     *
     * @param WC_Customer_Download $download WC_Customer_Download object.
     */
    public function update(&$download)
    {
        // stub
    }

    /**
     * Method to delete a download permission from the database.
     *
     * @param WC_Customer_Download $download WC_Customer_Download object.
     * @param array                $args Array of args to pass to the delete method.
     */
    public function delete(&$download, $args = array (
))
    {
        // stub
    }

    /**
     * Method to delete a download permission from the database by ID.
     *
     * @param int $id permission_id of the download to be deleted.
     */
    public function delete_by_id($id)
    {
        // stub
    }

    /**
     * Delete download_log related to download permission via $field with value $value.
     *
     * @param string           $field Field used to query download permission table with.
     * @param string|int|float $value Value to filter the field by.
     *
     * @return void
     */
    private function delete_download_log_by_field_value($field, $value)
    {
        // stub
    }

    /**
     * Method to delete a download permission from the database by order ID.
     *
     * @param int $id Order ID of the downloads that will be deleted.
     */
    public function delete_by_order_id($id)
    {
        // stub
    }

    /**
     * Method to delete a download permission from the database by download ID.
     *
     * @param int $id download_id of the downloads that will be deleted.
     */
    public function delete_by_download_id($id)
    {
        // stub
    }

    /**
     * Method to delete a download permission from the database by user ID.
     *
     * @since 3.4.0
     * @param int $id user ID of the downloads that will be deleted.
     * @return bool True if deleted rows.
     */
    public function delete_by_user_id($id)
    {
        // stub
    }

    /**
     * Method to delete a download permission from the database by user email.
     *
     * @since 3.4.0
     * @param string $email email of the downloads that will be deleted.
     * @return bool True if deleted rows.
     */
    public function delete_by_user_email($email)
    {
        // stub
    }

    /**
     * Get a download object.
     *
     * @param  array $data From the DB.
     * @return WC_Customer_Download
     */
    private function get_download($data)
    {
        // stub
    }

    /**
     * Get array of download ids by specified args.
     *
     * @param  array $args Arguments to filter downloads. $args['return'] accepts the following values: 'objects' (default), 'ids' or a comma separated list of fields (for example: 'order_id,user_id,user_email').
     * @return array Can be an array of permission_ids, an array of WC_Customer_Download objects or an array of arrays containing specified fields depending on the value of $args['return'].
     */
    public function get_downloads($args = array (
))
    {
        // stub
    }

    /**
     * Update download ids if the hash changes.
     *
     * @deprecated 3.3.0 Download id is now a static UUID and should not be changed based on file hash.
     *
     * @param  int    $product_id Product ID.
     * @param  string $old_id Old download_id.
     * @param  string $new_id New download_id.
     */
    public function update_download_id($product_id, $old_id, $new_id)
    {
        // stub
    }

    /**
     * Get a customers downloads.
     *
     * @param  int $customer_id Customer ID.
     * @return array
     */
    public function get_downloads_for_customer($customer_id)
    {
        // stub
    }

    /**
     * Update user prop for downloads based on order id.
     *
     * @param  int    $order_id Order ID.
     * @param  int    $customer_id Customer ID.
     * @param  string $email Customer email address.
     */
    public function update_user_by_order_id($order_id, $customer_id, $email)
    {
        // stub
    }

}

