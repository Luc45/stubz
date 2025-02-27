<?php

namespace Automattic\WooCommerce\Internal\Admin\ImportExport;

/**
 * Helper for CSV import functionality.
 *
 * @since 9.3.0
 */
class CSVUploadHelper
{
    /**
     * Name (inside the uploads folder) to use for the CSV import directory.
     *
     * @return string
     */
    protected function get_import_subdir_name(): string
    {
        // stub
    }

    /**
     * Returns the full path to the CSV import directory within the uploads folder.
     * It will attempt to create the directory if it doesn't exist.
     *
     * @param bool $create TRUE to attempt to create the directory. FALSE otherwise.
     * @return string
     * @throws \Exception In case the upload directory doesn't exits or can't be created.
     */
    public function get_import_dir(bool $create = true): string
    {
        // stub
    }

    /**
     * Handles a CSV file upload.
     *
     * @param string     $import_type        Type of upload or context.
     * @param string     $files_index        $_FILES index that contains the file to upload.
     * @param array|null $allowed_mime_types List of allowed MIME types.
     * @return array {
     *     Details for the uploaded file.
     *
     *     @type int    $id   Attachment ID.
     *     @type string $file Full path to uploaded file.
     * }
     *
     * @throws \Exception In case of error.
     */
    public function handle_csv_upload(string $import_type, string $files_index = 'import', array|null $allowed_mime_types = null): array
    {
        // stub
    }

    /**
     * Hooked onto 'upload_dir' to override the default upload directory for a CSV upload.
     *
     * @param array $uploads WP upload dir details.
     * @return array
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function override_upload_dir($uploads): array
    {
        // stub
    }

    /**
     * Adds a random string to the name of an uploaded CSV file to make it less discoverable. Hooked onto 'wp_unique_filename'.
     *
     * @param string $filename File name.
     * @param string $ext      File extension.
     * @return string
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function override_unique_filename(string $filename, string $ext): string
    {
        // stub
    }

    /**
     * `wp_import_handle_upload()` appends .txt to any file name. This function is hooked onto 'wp_handle_upload_prefilter'
     * to remove those extra characters.
     *
     * @param array $file File details in the form of a $_FILES entry.
     * @return array Modified file details.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function remove_txt_from_uploaded_file(array $file): array
    {
        // stub
    }

}