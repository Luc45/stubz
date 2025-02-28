<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * A class of utilities for dealing with arrays.
 */
class ArrayUtil
{
    /**
     * Determines if the given array is a list.
     *
     * An array is considered a list if its keys consist of consecutive numbers from 0 to count($array)-1.
     *
     * Polyfill for array_is_list() in PHP 8.1.
     *
     * @param array $arr The array being evaluated.
     *
     * @return bool True if array is a list, false otherwise.
     */
    public static function array_is_list(array $arr): bool
    {
    }
    /**
     * Merge two lists of associative arrays by a key.
     *
     * @param array  $arr1 The first array.
     * @param array  $arr2 The second array.
     * @param string $key  The key to merge by.
     *
     * @return array The merged list sorted by the key values.
     */
    public static function merge_by_key(array $arr1, array $arr2, string $key): array
    {
    }
}
