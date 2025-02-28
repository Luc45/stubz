<?php

/**
 * Class that extends WC_Background_Process to process image regeneration in the background.
 */
class WC_Regenerate_Images_Request
{
    /**
     * Stores the attachment ID being processed.
     *
     * @var integer
     */
    protected $attachment_id = 0;

    /**
     * Initiate new background process.
     */
    public function __construct()
{
}
    /**
     * Is job running?
     *
     * @return boolean
     */
    public function is_running()
{
}
    /**
     * Limit each task ran per batch to 1 for image regen.
     *
     * @return bool
     */
    protected function batch_limit_exceeded()
{
}
    /**
     * Determines whether an attachment can have its thumbnails regenerated.
     *
     * Adapted from Regenerate Thumbnails by Alex Mills.
     *
     * @param WP_Post $attachment An attachment's post object.
     * @return bool Whether the given attachment can have its thumbnails regenerated.
     */
    protected function is_regeneratable($attachment)
{
}
    /**
     * Code to execute for each item in the queue
     *
     * @param mixed $item Queue item to iterate over.
     * @return bool
     */
    protected function task($item)
{
}
    /**
     * Filters the list of thumbnail sizes to only include those which have missing files.
     *
     * @param array $sizes         An associative array of registered thumbnail image sizes.
     * @param array $metadata      An associative array of fullsize image metadata: width, height, file.
     * @param int   $attachment_id Attachment ID. Only passed from WP 5.0+.
     * @return array An associative array of image sizes.
     */
    public function filter_image_sizes_to_only_missing_thumbnails($sizes, $metadata, $attachment_id = null)
{
}
    /**
     * Returns the sizes we want to regenerate.
     *
     * @param array $sizes Sizes to generate.
     * @return array
     */
    public function adjust_intermediate_image_sizes($sizes)
{
}
    /**
     * This runs once the job has completed all items on the queue.
     *
     * @return void
     */
    protected function complete()
{
}
}
