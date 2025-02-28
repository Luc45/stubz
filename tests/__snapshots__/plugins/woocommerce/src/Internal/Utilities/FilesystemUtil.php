<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * FilesystemUtil class.
 */
class FilesystemUtil
{
    /**
     * Wrapper to retrieve the class instance contained in the $wp_filesystem global, after initializing if necessary.
     *
     * @return WP_Filesystem_Base
     * @throws Exception Thrown when the filesystem fails to initialize.
     */
    public static function get_wp_filesystem(): WP_Filesystem_Base
{
}
    /**
     * Get the WP filesystem method, with a fallback to 'direct' if no FS_METHOD constant exists and there are not FTP related options/credentials set.
     *
     * @return string|false The name of the WP filesystem method to use.
     */
    public static function get_wp_filesystem_method_or_direct()
{
}
    /**
     * Check if a constant exists and is not null.
     *
     * @param string $name Constant name.
     * @return bool True if the constant exists and its value is not null.
     */
    private static function constant_exists(string $name): bool
{
}
    /**
     * Recursively creates a directory (if it doesn't exist) and adds an empty index.html and a .htaccess to prevent
     * directory listing.
     *
     * @since 9.3.0
     *
     * @param string $path Directory to create.
     * @throws \Exception In case of error.
     */
    public static function mkdir_p_not_indexable(string $path): void
{
}
    /**
     * Wrapper to initialize the WP filesystem with defined credentials if they are available.
     *
     * @return bool True if the $wp_filesystem global was successfully initialized.
     */
    protected static function initialize_wp_filesystem(): bool
{
}
}