<?php

namespace Automattic\WooCommerce\RestApi\Utilities;

/**
 * ImageAttachment class.
 */
class ImageAttachment
{
    /**
     * Attachment ID.
     *
     * @var integer
     */
    public $id = 0;
    /**
     * Object attached to.
     *
     * @var integer
     */
    public $object_id = 0;
    /**
     * Constructor.
     *
     * @param integer $id Attachment ID.
     * @param integer $object_id Object ID.
     */
    public function __construct($id = 0, $object_id = 0)
    {
    }
    /**
     * Upload an attachment file.
     *
     * @throws \WC_REST_Exception REST API exceptions.
     * @param string $src URL to file.
     */
    public function upload_image_from_src($src)
    {
    }
    /**
     * Update attachment alt text.
     *
     * @param string $text Text to set.
     */
    public function update_alt_text($text)
    {
    }
    /**
     * Update attachment name.
     *
     * @param string $text Text to set.
     */
    public function update_name($text)
    {
    }
}