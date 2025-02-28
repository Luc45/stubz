<?php

/**
 * WC_Meta_Box_Product_Categories Class.
 */
class WC_Meta_Box_Product_Categories
{
    /**
     * Output the metabox.
     *
     * @param WP_Post $post Current post object.
     * @param array   $box {
     *     Categories meta box arguments.
     *
     *     @type string   $id       Meta box 'id' attribute.
     *     @type string   $title    Meta box title.
     *     @type callable $callback Meta box display callback.
     *     @type array    $args {
     *         Extra meta box arguments.
     *
     *         @type string $taxonomy Taxonomy. Default 'category'.
     *     }
     * }
     */
    public static function output($post, $box)
    {
    }
}
