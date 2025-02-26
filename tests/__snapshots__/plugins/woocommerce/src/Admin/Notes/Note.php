<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Note class.
 */
class Note extends \WC_Data
{
    const E_WC_ADMIN_NOTE_ERROR = 'error';

    const E_WC_ADMIN_NOTE_WARNING = 'warning';

    const E_WC_ADMIN_NOTE_UPDATE = 'update';

    const E_WC_ADMIN_NOTE_INFORMATIONAL = 'info';

    const E_WC_ADMIN_NOTE_MARKETING = 'marketing';

    const E_WC_ADMIN_NOTE_SURVEY = 'survey';

    const E_WC_ADMIN_NOTE_EMAIL = 'email';

    const E_WC_ADMIN_NOTE_PENDING = 'pending';

    const E_WC_ADMIN_NOTE_UNACTIONED = 'unactioned';

    const E_WC_ADMIN_NOTE_ACTIONED = 'actioned';

    const E_WC_ADMIN_NOTE_SNOOZED = 'snoozed';

    const E_WC_ADMIN_NOTE_SENT = 'sent';

    /**
     * This is the name of this object type.
     *
     * @var string
     */
    protected $object_type = 'admin-note';

    /**
     * Cache group.
     *
     * @var string
     */
    protected $cache_group = 'admin-note';

    /**
     * Note constructor. Loads note data.
     *
     * @param mixed $data Note data, object, or ID.
     */
    public function __construct($data = '')
    {
        // stub
    }

    /**
     * Merge changes with data and clear.
     *
     * @since 3.0.0
     */
    public function apply_changes()
    {
        // stub
    }

    /**
     * Get allowed types.
     *
     * @return array
     */
    public static function get_allowed_types()
    {
        // stub
    }

    /**
     * Get allowed statuses.
     *
     * @return array
     */
    public static function get_allowed_statuses()
    {
        // stub
    }

    /**
     * Returns all data for this object.
     *
     * Override \WC_Data::get_data() to avoid errantly including meta data
     * from ID collisions with the posts table.
     *
     * @return array
     */
    public function get_data()
    {
        // stub
    }

    /**
     * Get note name.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_name($context = 'view')
    {
        // stub
    }

    /**
     * Get note type.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_type($context = 'view')
    {
        // stub
    }

    /**
     * Get note locale.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_locale($context = 'view')
    {
        // stub
    }

    /**
     * Get note title.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_title($context = 'view')
    {
        // stub
    }

    /**
     * Get note content.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_content($context = 'view')
    {
        // stub
    }

    /**
     * Get note content data (i.e. values that would be needed for re-localization)
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return object
     */
    public function get_content_data($context = 'view')
    {
        // stub
    }

    /**
     * Get note status.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_status($context = 'view')
    {
        // stub
    }

    /**
     * Get note source.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_source($context = 'view')
    {
        // stub
    }

    /**
     * Get date note was created.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_created($context = 'view')
    {
        // stub
    }

    /**
     * Get date on which user should be reminded of the note (if any).
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_reminder($context = 'view')
    {
        // stub
    }

    /**
     * Get note snoozability.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return bool   Whether or not the note can be snoozed.
     */
    public function get_is_snoozable($context = 'view')
    {
        // stub
    }

    /**
     * Get actions on the note (if any).
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_actions($context = 'view')
    {
        // stub
    }

    /**
     * Get action by action name on the note.
     *
     * @param  string $action_name The action name.
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return object the action.
     */
    public function get_action($action_name, $context = 'view')
    {
        // stub
    }

    /**
     * Get note layout (the old notes won't have one).
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_layout($context = 'view')
    {
        // stub
    }

    /**
     * Get note image (if any).
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_image($context = 'view')
    {
        // stub
    }

    /**
     * Get deleted status.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return bool
     */
    public function get_is_deleted($context = 'view')
    {
        // stub
    }

    /**
     * Get is_read status.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return bool
     */
    public function get_is_read($context = 'view')
    {
        // stub
    }

    /**
     * Set note name.
     *
     * @param string $name Note name.
     */
    public function set_name($name)
    {
        // stub
    }

    /**
     * Set note type.
     *
     * @param string $type Note type.
     */
    public function set_type($type)
    {
        // stub
    }

    /**
     * Set note locale.
     *
     * @param string $locale Note locale.
     */
    public function set_locale($locale)
    {
        // stub
    }

    /**
     * Set note title.
     *
     * @param string $title Note title.
     */
    public function set_title($title)
    {
        // stub
    }

    /**
     * Set note icon (Deprecated).
     *
     * @param string $icon Note icon.
     */
    public function set_icon($icon)
    {
        // stub
    }

    /**
     * Set note content.
     *
     * @param string $content Note content.
     */
    public function set_content($content)
    {
        // stub
    }

    /**
     * Set note data for potential re-localization.
     *
     * @todo Set a default empty array? https://github.com/woocommerce/woocommerce-admin/pull/1763#pullrequestreview-212442921.
     * @param object $content_data Note data.
     */
    public function set_content_data($content_data)
    {
        // stub
    }

    /**
     * Set note status.
     *
     * @param string $status Note status.
     */
    public function set_status($status)
    {
        // stub
    }

    /**
     * Set note source.
     *
     * @param string $source Note source.
     */
    public function set_source($source)
    {
        // stub
    }

    /**
     * Set date note was created. NULL is not allowed
     *
     * @param string|integer $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed.
     */
    public function set_date_created($date)
    {
        // stub
    }

    /**
     * Set date admin should be reminded of note. NULL IS allowed
     *
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if there is no date.
     */
    public function set_date_reminder($date)
    {
        // stub
    }

    /**
     * Set note snoozability.
     *
     * @param bool $is_snoozable Whether or not the note can be snoozed.
     */
    public function set_is_snoozable($is_snoozable)
    {
        // stub
    }

    /**
     * Clear actions from a note.
     */
    public function clear_actions()
    {
        // stub
    }

    /**
     * Set note layout.
     *
     * @param string $layout Note layout.
     */
    public function set_layout($layout)
    {
        // stub
    }

    /**
     * Set note image.
     *
     * @param string $image Note image.
     */
    public function set_image($image)
    {
        // stub
    }

    /**
     * Set note deleted status. NULL is not allowed
     *
     * @param bool $is_deleted Note deleted status.
     */
    public function set_is_deleted($is_deleted)
    {
        // stub
    }

    /**
     * Set note is_read status. NULL is not allowed
     *
     * @param bool $is_read Note is_read status.
     */
    public function set_is_read($is_read)
    {
        // stub
    }

    /**
     * Add an action to the note
     *
     * @param string  $name           Action name (not presented to user).
     * @param string  $label          Action label (presented as button label).
     * @param string  $url            Action URL, if navigation needed. Optional.
     * @param string  $status         Status to transition parent Note to upon click. Defaults to 'actioned'.
     * @param boolean $primary        Deprecated since version 3.4.0.
     * @param string  $actioned_text The label to display after the note has been actioned but before it is dismissed in the UI.
     */
    public function add_action($name, $label, $url = '', $status, $primary = false, $actioned_text = '')
    {
        // stub
    }

    /**
     * Set actions on a note.
     *
     * @param array $actions Note actions.
     */
    public function set_actions($actions)
    {
        // stub
    }

    /**
     * Add a nonce to an existing note action.
     *
     * @link https://codex.wordpress.org/WordPress_Nonces
     *
     * @param string $note_action_name Name of action to add a nonce to.
     * @param string $nonce_action The nonce action.
     * @param string $nonce_name The nonce Name. This is used as the parameter name in the resulting URL for the action.
     * @return void
     * @throws \Exception If note name cannot be found.
     */
    public function add_nonce_to_action(string $note_action_name, string $nonce_action, string $nonce_name)
    {
        // stub
    }

}

