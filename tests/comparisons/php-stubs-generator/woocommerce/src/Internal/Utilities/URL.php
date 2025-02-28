<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * Provides an easy method of assessing URLs, including filepaths (which will be silently
 * converted to a file:// URL if provided).
 */
class URL
{
    /**
     * Creates and processes the provided URL (or filepath).
     *
     * @throws URLException If the URL (or filepath) is seriously malformed.
     *
     * @param string $url The URL (or filepath).
     */
    public function __construct(string $url)
    {
    }
    /**
     * Returns the processed URL as a string.
     *
     * @return string
     */
    public function __toString() : string
    {
    }
    /**
     * Returns all possible parent URLs for the current URL.
     *
     * @return string[]
     */
    public function get_all_parent_urls() : array
    {
    }
    /**
     * Outputs the parent URL.
     *
     * For example, if $this->get_url() returns "https://example.com/foo/bar/baz" then
     * this method will return "https://example.com/foo/bar/".
     *
     * When a grand-parent is needed, the optional $level parameter can be used. By default
     * this is set to 1 (parent). 2 will yield the grand-parent, 3 will yield the great
     * grand-parent, etc.
     *
     * If a level is specified that exceeds the number of path segments, this method will
     * return false.
     *
     * @param int $level Used to indicate the level of parent.
     *
     * @return string|false
     */
    public function get_parent_url(int $level = 1)
    {
    }
    /**
     * Outputs the processed URL.
     *
     * Borrows from https://www.php.net/manual/en/function.parse-url.php#106731
     *
     * @param array $component_overrides If provided, these will override values set in $this->components.
     *
     * @return string
     */
    public function get_url(array $component_overrides = array()) : string
    {
    }
    /**
     * Outputs the path. Especially useful if it was a a regular filepath that was passed in originally.
     *
     * @param string|null $path_override If provided this will be used as the URL path. Does not impact drive letter.
     *
     * @return string
     */
    public function get_path(?string $path_override = null) : string
    {
    }
    /**
     * Indicates if the URL or filepath was absolute.
     *
     * @return bool True if absolute, else false.
     */
    public function is_absolute() : bool
    {
    }
    /**
     * Indicates if the URL or filepath was relative.
     *
     * @return bool True if relative, else false.
     */
    public function is_relative() : bool
    {
    }
}