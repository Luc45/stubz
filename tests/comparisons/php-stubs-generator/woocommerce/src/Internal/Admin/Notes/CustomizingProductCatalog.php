<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Class CustomizingProductCatalog
 *
 * @package Automattic\WooCommerce\Admin\Notes
 */
class CustomizingProductCatalog
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-customizing-product-catalog';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}