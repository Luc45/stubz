<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * ImageAttachmentSchema class.
 */
class ImageAttachmentSchema
{
    const IDENTIFIER = 'image';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'image';

    /**
     * Product schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
        // stub
    }

    /**
     * Convert a WooCommerce product into an object suitable for the response.
     *
     * @param int $attachment_id Image attachment ID.
     * @return object|null
     */
    public function get_item_response($attachment_id)
    {
        // stub
    }

}

