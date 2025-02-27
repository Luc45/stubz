<?php

/**
 * Product download class.
 */
class WC_Product_Download implements \ArrayAccess
{
    /**
     * Data array.
     *
     * @since 3.0.0
     * @var array
     */
    protected $data = array (
  'id' => '',
  'name' => '',
  'file' => '',
  'enabled' => true,
);

    /**
     * Returns all data for this object.
     *
     * @return array
     */
    public function get_data()
    {
        // stub
    }

    /**
     * Get allowed mime types.
     *
     * @return array
     */
    public function get_allowed_mime_types()
    {
        // stub
    }

    /**
     * Get type of file path set.
     *
     * @param  string $file_path optional.
     * @return string absolute, relative, or shortcode.
     */
    public function get_type_of_file_path($file_path = '')
    {
        // stub
    }

    /**
     * Get file type.
     *
     * @return string
     */
    public function get_file_type()
    {
        // stub
    }

    /**
     * Get file extension.
     *
     * @return string
     */
    public function get_file_extension()
    {
        // stub
    }

    /**
     * Confirms that the download is of an allowed filetype, that it exists and that it is
     * contained within an approved directory. Used before adding to a product's list of
     * downloads.
     *
     * @internal
     * @throws Exception If the download is determined to be invalid.
     *
     * @param bool $auto_add_to_approved_directory_list If the download is not already in the approved directory list, automatically add it if possible.
     */
    public function check_is_valid(bool $auto_add_to_approved_directory_list = true)
    {
        // stub
    }

    /**
     * Check if file is allowed.
     *
     * @return boolean
     */
    public function is_allowed_filetype()
    {
        // stub
    }

    /**
     * Validate file exists.
     *
     * @return boolean
     */
    public function file_exists()
    {
        // stub
    }

    /**
     * Confirms that the download exists within an approved directory.
     *
     * If it is not within an approved directory but the current user has sufficient
     * capabilities, then the method will try to add the download's directory to the
     * approved directory list.
     *
     * @throws Exception If the download is not in an approved directory.
     *
     * @param bool $auto_add_to_approved_directory_list If the download is not already in the approved directory list, automatically add it if possible.
     */
    private function approved_directory_checks(bool $auto_add_to_approved_directory_list = true)
    {
        // stub
    }

    /**
     * Convenience method, allows us to re-use the same exception messaging from different areas.
     *
     * @throws Exception
     *
     * @param string $download_file
     *
     * @return void
     */
    private function raise_invalid_file_exception(string $download_file): void
    {
        // stub
    }

    /**
     * Set ID.
     *
     * @param string $value Download ID.
     */
    public function set_id($value)
    {
        // stub
    }

    /**
     * Set name.
     *
     * @param string $value Download name.
     */
    public function set_name($value)
    {
        // stub
    }

    /**
     * Set previous_hash.
     *
     * @deprecated 3.3.0 No longer using filename based hashing to keep track of files.
     * @param string $value Previous hash.
     */
    public function set_previous_hash($value)
    {
        // stub
    }

    /**
     * Set file.
     *
     * @param string $value File URL/Path.
     */
    public function set_file($value)
    {
        // stub
    }

    /**
     * Sets the status of the download to enabled (true) or disabled (false).
     *
     * @param bool $enabled True indicates the downloadable file is enabled, false indicates it is disabled.
     */
    public function set_enabled(bool $enabled = true)
    {
        // stub
    }

    /**
     * Get id.
     *
     * @return string
     */
    public function get_id()
    {
        // stub
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function get_name()
    {
        // stub
    }

    /**
     * Get previous_hash.
     *
     * @deprecated 3.3.0 No longer using filename based hashing to keep track of files.
     * @return string
     */
    public function get_previous_hash()
    {
        // stub
    }

    /**
     * Get file.
     *
     * @return string
     */
    public function get_file()
    {
        // stub
    }

    /**
     * Get status of the download.
     *
     * @return bool
     */
    public function get_enabled(): bool
    {
        // stub
    }

    /**
     * OffsetGet.
     *
     * @param string $offset Offset.
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        // stub
    }

    /**
     * OffsetSet.
     *
     * @param string $offset Offset.
     * @param mixed  $value Offset value.
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        // stub
    }

    /**
     * OffsetUnset.
     *
     * @param string $offset Offset.
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        // stub
    }

    /**
     * OffsetExists.
     *
     * @param string $offset Offset.
     * @return bool
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        // stub
    }

}
