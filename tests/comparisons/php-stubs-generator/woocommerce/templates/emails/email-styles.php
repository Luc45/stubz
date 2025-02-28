<?php

/**
 * Check if we are in preview mode (WooCommerce > Settings > Emails).
 *
 * @since 9.6.0
 * @param bool $is_email_preview Whether the email is being previewed.
 */

$is_email_preview = \apply_filters('woocommerce_is_email_preview', \false);
