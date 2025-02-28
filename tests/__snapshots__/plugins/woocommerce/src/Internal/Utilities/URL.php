<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * Provides an easy method of assessing URLs, including filepaths (which will be silently
 * converted to a file:// URL if provided).
 */
class URL implements \Stringable
{
    /**
     * Components of the URL being assessed.
     *
     * The keys match those potentially returned by the parse_url() function, except
     * that they are always defined and 'drive' (Windows drive letter) has been added.
     *
     * @var string|null[]
     */
    private $components = array (
  'drive' => null,
  'fragment' => null,
  'host' => null,
  'pass' => null,
  'path' => null,
  'port' => null,
  'query' => null,
  'scheme' => null,
  'user' => null,
);

    /**
     * If the URL (or filepath) is absolute.
     *
     * @var bool
     */
    private $is_absolute = null;

    /**
     * If the URL (or filepath) represents a directory other than the root directory.
     *
     * This is useful at different points in the process, when deciding whether to re-apply
     * a trailing slash at the end of processing or when we need to calculate how many
     * directory traversals are needed to form a (grand-)parent URL.
     *
     * @var bool
     */
    private $is_non_root_directory = null;

    /**
     * The components of the URL's path.
     *
     * For instance, in the case of "file:///srv/www/wp.site" (noting that a file URL has
     * no host component) this would contain:
     *
     *     [ "srv", "www", "wp.site" ]
     *
     * In the case of a non-file URL such as "https://example.com/foo/bar/baz" (noting the
     * host is not part of the path) it would contain:
     *
     *    [ "foo", "bar", "baz" ]
     *
     * @var array
     */
    private $path_parts = array();

    /**
     * The URL.
     *
     * @var string
     */
    private $url = null;

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
     * Makes all slashes forward slashes, converts filepaths to file:// URLs, and
     * other processing to help with comprehension of filepaths.
     *
     * @throws URLException If the URL is seriously malformed.
     */
    private function preprocess()
{
}
    /**
     * Simplifies the path if possible, by resolving directory traversals to the extent possible
     * without touching the filesystem.
     */
    private function process_path()
{
}
    /**
     * Returns the processed URL as a string.
     *
     * @return string
     */
    public function __toString(): string
{
}
    /**
     * Returns all possible parent URLs for the current URL.
     *
     * @return string[]
     */
    public function get_all_parent_urls(): array
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
    public function get_url(array $component_overrides = array()): string
{
}
    /**
     * Outputs the path. Especially useful if it was a a regular filepath that was passed in originally.
     *
     * @param string|null $path_override If provided this will be used as the URL path. Does not impact drive letter.
     *
     * @return string
     */
    public function get_path(string|null $path_override = null): string
{
}
    /**
     * Indicates if the URL or filepath was absolute.
     *
     * @return bool True if absolute, else false.
     */
    public function is_absolute(): bool
{
}
    /**
     * Indicates if the URL or filepath was relative.
     *
     * @return bool True if relative, else false.
     */
    public function is_relative(): bool
{
}
}