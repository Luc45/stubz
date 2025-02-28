<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * Utility for re-using WP Kses-based sanitization rules.
 */
class HtmlSanitizer
{
    /**
     * Rules for allowing minimal HTML (breaks, images, paragraphs and spans) without any links.
     */
    public const LOW_HTML_BALANCED_TAGS_NO_LINKS = array(
'pre_processors' => array(
'stripslashes',
'force_balance_tags'
),
'wp_kses_rules' => array(
'br' => true,
'img' => array(
'alt' => true,
'class' => true,
'src' => true,
'title' => true
),
'p' => array(
'class' => true
),
'span' => array(
'class' => true,
'title' => true
)
)
);
    /**
     * Sanitizes a chunk of HTML, by following the same rules as `wp_kses_post()` but also allowing
     * the style element to be supplied.
     *
     * @param string $html The HTML to be sanitized.
     *
     * @return string
     */
    public function styled_post_content(string $html): string
{
}
    /**
     * Sanitizes the HTML according to the provided rules.
     *
     * @see wp_kses()
     *
     * @param string $html HTML string to be sanitized.
     * @param array  $sanitizer_rules {
     *     Optional and defaults to self::TRIMMED_BALANCED_LOW_HTML_NO_LINKS. Otherwise, one or more of the following
     *     keys should be set.
     *
     *     @type array $pre_processors  Callbacks to run before invoking `wp_kses()`.
     *     @type array $wp_kses_rules   Element names and attributes to allow, per `wp_kses()`.
     * }
     *
     * @return string
     */
    public function sanitize(string $html, array $sanitizer_rules = array(
'pre_processors' => array(
'stripslashes',
'force_balance_tags'
),
'wp_kses_rules' => array(
'br' => true,
'img' => array(
'alt' => true,
'class' => true,
'src' => true,
'title' => true
),
'p' => array(
'class' => true
),
'span' => array(
'class' => true,
'title' => true
)
)
)): string
{
}
}