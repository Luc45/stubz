<?php

namespace Automattic\WooCommerce\Internal\Traits;

/**
 * Trait OrderAttributionMeta
 *
 * @since 8.5.0
 *
 * phpcs:disable Generic.Commenting.DocComment.MissingShort
 */
trait OrderAttributionMeta
{
    /**
     * The default fields and their sourcebuster accessors,
     * to show in the source data metabox.
     *
     * @var string[]
     * */
    private $default_fields = array(
        // main fields.
        'source_type' => 'current.typ',
        'referrer' => 'current_add.rf',
        // utm fields.
        'utm_campaign' => 'current.cmp',
        'utm_source' => 'current.src',
        'utm_medium' => 'current.mdm',
        'utm_content' => 'current.cnt',
        'utm_id' => 'current.id',
        'utm_term' => 'current.trm',
        'utm_source_platform' => 'current.plt',
        'utm_creative_format' => 'current.fmt',
        'utm_marketing_tactic' => 'current.tct',
        // additional fields.
        'session_entry' => 'current_add.ep',
        'session_start_time' => 'current_add.fd',
        'session_pages' => 'session.pgs',
        'session_count' => 'udata.vst',
        'user_agent' => 'udata.uag',
    );
    /** @var array */
    private $fields = array();
    /**
     * Cached `array_keys( $fields )`.
     *
     * @var array
     * */
    private $field_names = array();
    /** @var string */
    private $field_prefix = '';
    /**
     * Get the device type based on the other meta fields.
     *
     * @param array $values The meta values.
     *
     * @return string The device type.
     */
    protected function get_device_type(array $values): string
    {
    }
    /**
     * Set the fields and the field prefix.
     *
     * @return void
     */
    private function set_fields_and_prefix()
    {
    }
    /**
     * Set the meta prefix for our fields.
     *
     * @return void
     */
    private function set_field_prefix(): void
    {
    }
    /**
     * Filter an order's meta data to only the keys that we care about.
     *
     * Sets the origin value based on the source type.
     *
     * @param WC_Meta_Data[] $meta The meta data.
     *
     * @return array
     */
    private function filter_meta_data(array $meta): array
    {
    }
    /**
     * Get the field name with the appropriate prefix.
     *
     * @param string $name Field name.
     *
     * @return string The prefixed field name.
     */
    private function get_prefixed_field_name($name): string
    {
    }
    /**
     * Get the field name with the meta prefix.
     *
     * @param string $name The field name.
     *
     * @return string The prefixed field name.
     */
    private function get_meta_prefixed_field_name(string $name): string
    {
    }
    /**
     * Remove the meta prefix from the field name.
     *
     * @param string $name The prefixed fieldname .
     *
     * @return string
     */
    private function unprefix_meta_field_name(string $name): string
    {
    }
    /**
     * Get the order object with HPOS compatibility.
     *
     * @param WC_Order|WP_Post|int $post_or_order The post ID or object.
     *
     * @return WC_Order The order object
     * @throws Exception When the order isn't found.
     */
    private function get_hpos_order_object($post_or_order)
    {
    }
    /**
     * Map posted, prefixed values to field values.
     * Used for the classic forms.
     *
     * @param array $raw_values The raw values from the POST form.
     *
     * @return array
     */
    private function get_unprefixed_field_values(array $raw_values = array()): array
    {
    }
    /**
     * Map submitted values to meta values.
     *
     * @param array $raw_values The raw (unprefixed) values from the submitted data.
     *
     * @return array
     */
    private function get_source_values(array $raw_values = array()): array
    {
    }
    /**
     * Get the label for the Order origin with placeholder where appropriate. Can be
     * translated (for DB / display) or untranslated (for Tracks).
     *
     * @param string $source_type The source type.
     * @param string $source      The source.
     * @param bool   $translated  Whether the label should be translated.
     *
     * @return string
     */
    private function get_origin_label(string $source_type, string $source, bool $translated = true): string
    {
    }
    /**
     * Get the description for the order attribution field.
     *
     * @param string $field_name The field name.
     *
     * @return string
     */
    private function get_field_description(string $field_name): string
    {
    }
}
