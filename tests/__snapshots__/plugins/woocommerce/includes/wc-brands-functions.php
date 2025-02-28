<?php

/**
 * Helper function :: wc_get_brand_thumbnail_url function.
 *
 * @param  int    $brand_id Brand ID.
 * @param  string $size     Thumbnail image size.
 * @return string
 */
function wc_get_brand_thumbnail_url($brand_id, $size = 'full')
{
}
/**
 * Helper function :: wc_get_brand_thumbnail_image function.
 *
 * @since 9.4.0
 *
 * @param  object $brand Brand term.
 * @param  string $size  Thumbnail image size.
 * @return string
 */
function wc_get_brand_thumbnail_image($brand, $size = '')
{
}
/**
 * Retrieves product's brands.
 *
 * @param  int    $post_id Post ID (default: 0).
 * @param  string $sep     Seperator (default: ').
 * @param  string $before  Before item (default: '').
 * @param  string $after   After item (default: '').
 * @return array  List of terms
 */
function wc_get_brands($post_id = 0, $sep = ', ', $before = '', $after = '')
{
}
/**
 * Polyfill for get_brand_thumbnail_image.
 *
 * @param int    $brand_id Brand ID.
 * @param string $size Thumbnail image size.
 * @return string
 */
function get_brand_thumbnail_url($brand_id, $size = 'full')
{
}
/**
 * Polyfill for get_brand_thumbnail_image.
 *
 * @param object $brand Brand term.
 * @param string $size Thumbnail image size.
 * @return string
 */
function get_brand_thumbnail_image($brand, $size = '')
{
}
/**
 * Polyfill for get_brands.
 *
 * @param  int    $post_id Post ID (default: 0).
 * @param  string $sep     Seperator (default: ').
 * @param  string $before  Before item (default: '').
 * @param  string $after   After item (default: '').
 * @return array  List of terms
 */
function get_brands($post_id = 0, $sep = ', ', $before = '', $after = '')
{
}
