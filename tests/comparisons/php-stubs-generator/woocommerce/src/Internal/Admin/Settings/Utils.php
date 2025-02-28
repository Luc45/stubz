<?php

namespace Automattic\WooCommerce\Internal\Admin\Settings;

/**
 * Payments settings utilities class.
 */
class Utils
{
    /**
     * Apply order mappings to a base order map.
     *
     * @param array $base_map     The base order map.
     * @param array $new_mappings The order mappings to apply.
     *                            This can be a full or partial list of the base one,
     *                            but it can also contain (only) new IDs and their orders.
     *
     * @return array The updated base order map, normalized.
     */
    public static function order_map_apply_mappings(array $base_map, array $new_mappings): array
    {
    }
    /**
     * Move an id at a specific order in an order map.
     *
     * This method is used to simulate the behavior of a drag&drop sorting UI:
     * - When moving an id down, all the ids with an order equal or lower than the desired order
     *   but equal or higher than the current order are decreased by 1.
     * - When moving an id up, all the ids with an order equal or higher than the desired order
     *   but equal or lower than the current order are increased by 1.
     *
     * @param array  $order_map The order map.
     * @param string $id        The id to place.
     * @param int    $order     The order at which to place the id.
     *
     * @return array The updated order map. This map is not normalized.
     */
    public static function order_map_move_at_order(array $order_map, string $id, int $order): array
    {
    }
    /**
     * Place an id at a specific order in an order map.
     *
     * @param array  $order_map The order map.
     * @param string $id        The id to place.
     * @param int    $order     The order at which to place the id.
     *
     * @return array The updated order map.
     */
    public static function order_map_place_at_order(array $order_map, string $id, int $order): array
    {
    }
    /**
     * Add an id to a specific order in an order map.
     *
     * @param array  $order_map The order map.
     * @param string $id        The id to move.
     * @param int    $order     The order to move the id to.
     *
     * @return array The updated order map. If the id is already in the order map, the order map is returned as is.
     */
    public static function order_map_add_at_order(array $order_map, string $id, int $order): array
    {
    }
    /**
     * Normalize an order map.
     *
     * Sort the order map by the order and ensure the order values start from 0 and are consecutive.
     *
     * @param array $order_map The order map.
     *
     * @return array The normalized order map.
     */
    public static function order_map_normalize(array $order_map): array
    {
    }
    /**
     * Change the minimum order of an order map.
     *
     * @param array $order_map     The order map.
     * @param int   $new_min_order The new minimum order.
     *
     * @return array The updated order map.
     */
    public static function order_map_change_min_order(array $order_map, int $new_min_order): array
    {
    }
    /**
     * Get the list of plugin slug suffixes used for handling non-standard testing slugs.
     *
     * @return string[] The list of plugin slug suffixes used for handling non-standard testing slugs.
     */
    public static function get_testing_plugin_slug_suffixes(): array
    {
    }
    /**
     * Generate a list of testing plugin slugs from a standard/official plugin slug.
     *
     * @param string $slug             The standard/official plugin slug. Most likely the WPORG slug.
     * @param bool   $include_original Optional. Whether to include the original slug in the list.
     *                                 If true, the original slug will be the first item in the list.
     *
     * @return string[] The list of testing plugin slugs generated from the standard/official plugin slug.
     */
    public static function generate_testing_plugin_slugs(string $slug, bool $include_original = false): array
    {
    }
    /**
     * Normalize a plugin slug to a standard/official slug.
     *
     * This is a best-effort approach.
     * It will remove beta testing suffixes and lowercase the slug.
     * It will NOT convert plugin titles to slugs or sanitize the slug like sanitize_title() does.
     *
     * @param string $slug The plugin slug.
     *
     * @return string The normalized plugin slug.
     */
    public static function normalize_plugin_slug(string $slug): string
    {
    }
    /**
     * Truncate a text to a target character length while preserving whole words.
     *
     * We take a greedy approach: if some characters of a word fit in the target length, the whole word is included.
     * This means we might exceed the target length by a few characters.
     * The append string length is not included in the character count.
     *
     * @param string      $text          The text to truncate.
     *                                   It will not be sanitized, stripped of HTML tags, or modified in any way before truncation.
     * @param int         $target_length The target character length of the truncated text.
     * @param string|null $append        Optional. The string to append to the truncated text, if there is any truncation.
     *
     * @return string The truncated text.
     */
    public static function truncate_with_words(string $text, int $target_length, string $append = null): string
    {
    }
}
