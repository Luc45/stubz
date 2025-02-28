<?php
/**
 * Regenerate Images Class
 */
class WC_Regenerate_Images
{
    /**
     * Background process to regenerate all images
     *
     * @var WC_Regenerate_Images_Request
     */
    protected static $background_process = null;
    /**
     * Stores size being generated on the fly.
     *
     * @var string
     */
    protected static $regenerate_size = null;
    /**
     * Init function
     */
    public static function init()
{
}
    /**
     * If an intermediate size meta differs from the actual image size (settings were changed?) return false so the wrong size is not used.
     *
     * @param array  $data Size data.
     * @param int    $attachment_id Attachment ID.
     * @param string $size Size name.
     * @return array
     */
    public static function filter_image_get_intermediate_size($data, $attachment_id, $size)
{
}
    /**
     * We need to track if uncropped was on or off when generating the images.
     *
     * @param array $meta_data Array of meta data.
     * @return array
     */
    public static function add_uncropped_metadata($meta_data)
{
}
    /**
     * See if an image's dimensions match actual settings.
     *
     * @param array  $image Image dimensions array.
     * @param string $size Named size.
     * @return bool True if they match. False if they do not (may trigger regen).
     */
    protected static function image_size_matches_settings($image, $size)
{
}
    /**
     * Show notice when job is running in background.
     */
    public static function regenerating_notice()
{
}
    /**
     * Dismiss notice and cancel jobs.
     */
    public static function dismiss_regenerating_notice()
{
}
    /**
     * Regenerate images if the settings have changed since last re-generation.
     *
     * @return void
     */
    public static function maybe_regenerate_images()
{
}
    /**
     * Check if we should maybe generate a new image size if not already there.
     *
     * @param array        $image Properties of the image.
     * @param int          $attachment_id Attachment ID.
     * @param string|array $size Image size.
     * @param bool         $icon If icon or not.
     * @return array
     */
    public static function maybe_resize_image($image, $attachment_id, $size, $icon)
{
}
    /**
     * Get full size image dimensions.
     *
     * @param int $attachment_id Attachment ID of image.
     * @return array Width and height. Empty array if the dimensions cannot be found.
     */
    private static function get_full_size_image_dimensions($attachment_id)
{
}
    /**
     * Ensure we are dealing with the correct image attachment
     *
     * @param int|WP_Post $attachment Attachment object or ID.
     * @return boolean
     */
    public static function is_regeneratable($attachment)
{
}
    /**
     * Only regenerate images for the requested size.
     *
     * @param array $sizes Array of image sizes.
     * @return array
     */
    public static function adjust_intermediate_image_sizes($sizes)
{
}
    /**
     * Generate the thumbnail filename and dimensions for a given file.
     *
     * @param string $fullsizepath Path to full size image.
     * @param int    $thumbnail_width  The width of the thumbnail.
     * @param int    $thumbnail_height The height of the thumbnail.
     * @param bool   $crop             Whether to crop or not.
     * @return array|false An array of the filename, thumbnail width, and thumbnail height, or false on failure to resize such as the thumbnail being larger than the fullsize image.
     */
    private static function get_image($fullsizepath, $thumbnail_width, $thumbnail_height, $crop)
{
}
    /**
     * Regenerate the image according to the required size
     *
     * @param int    $attachment_id Attachment ID.
     * @param array  $image Original Image.
     * @param string $size Size to return for new URL.
     * @param bool   $icon If icon or not.
     * @return string
     */
    private static function resize_and_return_image($attachment_id, $image, $size, $icon)
{
}
    /**
     * Image downsize, without this classes filtering on the results.
     *
     * @param int    $attachment_id Attachment ID.
     * @param string $size Size to downsize to.
     * @return string New image URL.
     */
    private static function unfiltered_image_downsize($attachment_id, $size)
{
}
    /**
     * Get list of images and queue them for regeneration
     *
     * @return void
     */
    public static function queue_image_regeneration()
{
}
}
