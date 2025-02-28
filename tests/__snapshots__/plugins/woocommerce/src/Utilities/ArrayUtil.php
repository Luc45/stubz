<?php

namespace Automattic\WooCommerce\Utilities;

/**
 * A class of utilities for dealing with arrays.
 */
class ArrayUtil
{
    public const SELECT_BY_AUTO = 0;
    public const SELECT_BY_OBJECT_METHOD = 1;
    public const SELECT_BY_OBJECT_PROPERTY = 2;
    public const SELECT_BY_ARRAY_KEY = 3;
    /**
     * Get a value from an nested array by specifying the entire key hierarchy with '::' as separator.
     *
     * E.g. for [ 'foo' => [ 'bar' => [ 'fizz' => 'buzz' ] ] ] the value for key 'foo::bar::fizz' would be 'buzz'.
     *
     * @param array  $items The array to get the value from.
     * @param string $key The complete key hierarchy, using '::' as separator.
     * @param mixed  $default_value The value to return if the key doesn't exist in the array.
     *
     * @return mixed The retrieved value, or the supplied default value.
     * @throws \Exception $array is not an array.
     */
    public static function get_nested_value(array $items, string $key, $default_value = null)
{
}
    /**
     * Checks if a given key exists in an array and its value can be evaluated as 'true'.
     *
     * @param array  $items The array to check.
     * @param string $key The key for the value to check.
     * @return bool True if the key exists in the array and the value can be evaluated as 'true'.
     */
    public static function is_truthy(array $items, string $key)
{
}
    /**
     * Gets the value for a given key from an array, or a default value if the key doesn't exist in the array.
     *
     * This is equivalent to "$array[$key] ?? $default" except in one case:
     * when they key exists, has a null value, and a non-null default is supplied:
     *
     * $array = ['key' => null]
     * $array['key'] ?? 'default' => 'default'
     * ArrayUtil::get_value_or_default($array, 'key', 'default') => null
     *
     * @param array  $items The array to get the value from.
     * @param string $key The key to use to retrieve the value.
     * @param null   $default_value The default value to return if the key doesn't exist in the array.
     * @return mixed|null The value for the key, or the default value passed.
     */
    public static function get_value_or_default(array $items, string $key, $default_value = null)
{
}
    /**
     * Converts an array of numbers to a human-readable range, such as "1,2,3,5" to "1-3, 5". It also supports
     * floating point numbers, however with some perhaps unexpected / undefined behaviour if used within a range.
     * Source: https://stackoverflow.com/a/34254663/4574
     *
     * @param array     $items    An array (in any order, see $sort) of individual numbers.
     * @param string    $item_separator  The string that separates sequential range groups.  Defaults to ', '.
     * @param string    $range_separator The string that separates ranges.  Defaults to '-'.  A plausible example otherwise would be ' to '.
     * @param bool|true $sort     Sort the array prior to iterating?  You'll likely always want to sort, but if not, you can set this to false.
     *
     * @return string
     */
    public static function to_ranges_string(array $items, string $item_separator = ', ', string $range_separator = '-', bool $sort = true): string
{
}
    /**
     * Select one single value from all the items in an array of either arrays or objects based on a selector.
     * For arrays, the selector is a key name; for objects, the selector can be either a method name or a property name.
     *
     * @param array  $items Items to apply the selection to.
     * @param string $selector_name Key, method or property name to use as a selector.
     * @param int    $selector_type Selector type, one of the SELECT_BY_* constants.
     * @return array The selected values.
     */
    public static function select(array $items, string $selector_name, int $selector_type = 0): array
{
}
    /**
     * Returns a new assoc array with format [ $key1 => $item1, $key2 => $item2, ... ] where $key is the value of the selector and items are original items passed.
     *
     * @param array  $items Items to use for conversion.
     * @param string $selector_name Key, method or property name to use as a selector.
     * @param int    $selector_type Selector type, one of the SELECT_BY_* constants.
     *
     * @return array The converted assoc array.
     */
    public static function select_as_assoc(array $items, string $selector_name, int $selector_type = 0): array
{
}
    /**
     * Returns whether two assoc array are same. The comparison is done recursively by keys, and the functions returns on first difference found.
     *
     * @param array $array1 First array to compare.
     * @param array $array2 Second array to compare.
     * @param bool  $strict Whether to use strict comparison.
     *
     * @return bool Whether the arrays are different.
     */
    public static function deep_compare_array_diff(array $array1, array $array2, bool $strict = true)
{
}
    /**
     * Computes difference between two assoc arrays recursively. Similar to PHP's native assoc_array_diff, but also supports nested arrays.
     *
     * @param array $array1 First array.
     * @param array $array2 Second array.
     * @param bool  $strict Whether to also match type of values.
     *
     * @return array The difference between the two arrays.
     */
    public static function deep_assoc_array_diff(array $array1, array $array2, bool $strict = true): array
{
}
    /**
     * Push a value to an array, but only if the value isn't in the array already.
     *
     * @param array $items The array.
     * @param mixed $value The value to maybe push.
     * @return bool True if the value has been added to the array, false if the value was already in the array.
     */
    public static function push_once(array &$items, $value): bool
{
}
    /**
     * Ensure that an associative array has a given key, and if not, set the key to an empty array.
     *
     * @param array  $items The array to check.
     * @param string $key The key to check.
     * @param bool   $throw_if_existing_is_not_array If true, an exception will be thrown if the key already exists in the array but the value is not an array.
     * @return bool True if the key has been added to the array, false if not (the key already existed).
     * @throws \Exception The key already exists in the array but the value is not an array.
     */
    public static function ensure_key_is_array(array &$items, string $key, bool $throw_if_existing_is_not_array = false): bool
{
}
    /**
     * Given an array of associative arrays, all having a shared key name ("column"), generates a new array in which
     * keys are the distinct column values found, and values are arrays with all the matches found
     * (or only the last matching array found, if $single_values is true).
     * See ArrayUtilTest for examples.
     *
     * @param array  $items The array to process.
     * @param string $column The name of the key to group by.
     * @param bool   $single_values True to only return the last suitable array found for each column value.
     * @return array The grouped array.
     */
    public static function group_by_column(array $items, string $column, bool $single_values = false): array
{
}
}