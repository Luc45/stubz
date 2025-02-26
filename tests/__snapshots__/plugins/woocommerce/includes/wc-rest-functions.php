<?php

/**
 * Parses and formats a date for ISO8601/RFC3339.
 *
 * Required WP 4.4 or later.
 * See https://developer.wordpress.org/reference/functions/mysql_to_rfc3339/
 *
 * @since  2.6.0
 * @param  string|null|WC_DateTime $date Date.
 * @param  bool                    $utc  Send false to get local/offset time.
 * @return string|null ISO8601/RFC3339 formatted datetime.
 */
function wc_rest_prepare_date_response($date, $utc = true)
{
    // stub
}

/**
 * Returns image mime types users are allowed to upload via the API.
 *
 * @since  2.6.4
 * @return array
 */
function wc_rest_allowed_image_mime_types()
{
    // stub
}

/**
 * Upload image from URL.
 *
 * @since 2.6.0
 * @param string $image_url Image URL.
 * @return array|WP_Error Attachment data or error message.
 */
function wc_rest_upload_image_from_url($image_url)
{
    // stub
}

/**
 * Set uploaded image as attachment.
 *
 * @since 2.6.0
 * @param array $upload Upload information from wp_upload_bits.
 * @param int   $id Post ID. Default to 0.
 * @return int Attachment ID
 */
function wc_rest_set_uploaded_image_as_attachment($upload, $id = 0)
{
    // stub
}

/**
 * Validate reports request arguments.
 *
 * @since 2.6.0
 * @param mixed           $value   Value to validate.
 * @param WP_REST_Request $request Request instance.
 * @param string          $param   Param to validate.
 * @return WP_Error|boolean
 */
function wc_rest_validate_reports_request_arg($value, $request, $param)
{
    // stub
}

/**
 * Encodes a value according to RFC 3986.
 * Supports multidimensional arrays.
 *
 * @since 2.6.0
 * @param string|array $value The value to encode.
 * @return string|array       Encoded values.
 */
function wc_rest_urlencode_rfc3986($value)
{
    // stub
}

/**
 * Check permissions of posts on REST API.
 *
 * @since 2.6.0
 * @param string $post_type Post type.
 * @param string $context   Request context.
 * @param int    $object_id Post ID.
 * @return bool
 */
function wc_rest_check_post_permissions($post_type, $context = 'read', $object_id = 0)
{
    // stub
}

/**
 * Check permissions of users on REST API.
 *
 * @since 2.6.0
 * @param string $context   Request context.
 * @param int    $object_id Post ID.
 * @return bool
 */
function wc_rest_check_user_permissions($context = 'read', $object_id = 0)
{
    // stub
}

/**
 * Check permissions of product terms on REST API.
 *
 * @since 2.6.0
 * @param string $taxonomy  Taxonomy.
 * @param string $context   Request context.
 * @param int    $object_id Post ID.
 * @return bool
 */
function wc_rest_check_product_term_permissions($taxonomy, $context = 'read', $object_id = 0)
{
    // stub
}

/**
 * Check manager permissions on REST API.
 *
 * @since 2.6.0
 * @param string $object  Object.
 * @param string $context Request context.
 * @return bool
 */
function wc_rest_check_manager_permissions($object, $context = 'read')
{
    // stub
}

/**
 * Check product reviews permissions on REST API.
 *
 * @since 3.5.0
 * @param string $context   Request context.
 * @param string $object_id Object ID.
 * @return bool
 */
function wc_rest_check_product_reviews_permissions($context = 'read', $object_id = 0)
{
    // stub
}

/**
 * Returns true if the current REST request is from the product editor.
 *
 * @since 8.9.0
 * @return bool
 */
function wc_rest_is_from_product_editor()
{
    // stub
}

/**
 * Check if a REST namespace should be loaded. Useful to maintain site performance even when lots of REST namespaces are registered.
 *
 * @since 9.2.0.
 *
 * @param string $ns The namespace to check.
 * @param string $rest_route (Optional) The REST route being checked.
 *
 * @return bool True if the namespace should be loaded, false otherwise.
 */
function wc_rest_should_load_namespace(string $ns, string $rest_route = ''): bool
{
    // stub
}

