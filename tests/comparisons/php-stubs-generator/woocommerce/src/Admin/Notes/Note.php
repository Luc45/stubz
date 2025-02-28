<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Note class.
 */
class Note extends \WC_Data
{
    // Note types.
    const E_WC_ADMIN_NOTE_ERROR = 'error';
    // used for presenting error conditions.
    const E_WC_ADMIN_NOTE_WARNING = 'warning';
    // used for presenting warning conditions.
    const E_WC_ADMIN_NOTE_UPDATE = 'update';
    // i.e. used when a new version is available.
    const E_WC_ADMIN_NOTE_INFORMATIONAL = 'info';
    // used for presenting informational messages.
    const E_WC_ADMIN_NOTE_MARKETING = 'marketing';
    // used for adding marketing messages.
    const E_WC_ADMIN_NOTE_SURVEY = 'survey';
    // used for adding survey messages.
    const E_WC_ADMIN_NOTE_EMAIL = 'email';
    // used for adding notes that will be sent by email.
    // Note status codes.
    const E_WC_ADMIN_NOTE_PENDING = 'pending';
    // the note is pending - hidden but not actioned.
    const E_WC_ADMIN_NOTE_UNACTIONED = 'unactioned';
    // the note has not yet been actioned by a user.
    const E_WC_ADMIN_NOTE_ACTIONED = 'actioned';
    // the note has had its action completed by a user.
    const E_WC_ADMIN_NOTE_SNOOZED = 'snoozed';
    // the note has been snoozed by a user.
    const E_WC_ADMIN_NOTE_SENT = 'sent';
    // the note has been sent by email to the user.
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
    }
    /**
     * Merge changes with data and clear.
     *
     * @since 3.0.0
     */
    public function apply_changes()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Helpers
    |--------------------------------------------------------------------------
    |
    | Methods for getting allowed types, statuses.
    |
    */
    /**
     * Get allowed types.
     *
     * @return array
     */
    public static function get_allowed_types()
    {
    }
    /**
     * Get allowed statuses.
     *
     * @return array
     */
    public static function get_allowed_statuses()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    |
    | Methods for getting data from the note object.
    |
    */
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
    }
    /**
     * Get note name.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_name($context = 'view')
    {
    }
    /**
     * Get note type.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_type($context = 'view')
    {
    }
    /**
     * Get note locale.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_locale($context = 'view')
    {
    }
    /**
     * Get note title.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_title($context = 'view')
    {
    }
    /**
     * Get note content.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_content($context = 'view')
    {
    }
    /**
     * Get note content data (i.e. values that would be needed for re-localization)
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return object
     */
    public function get_content_data($context = 'view')
    {
    }
    /**
     * Get note status.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_status($context = 'view')
    {
    }
    /**
     * Get note source.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_source($context = 'view')
    {
    }
    /**
     * Get date note was created.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_created($context = 'view')
    {
    }
    /**
     * Get date on which user should be reminded of the note (if any).
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_reminder($context = 'view')
    {
    }
    /**
     * Get note snoozability.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return bool   Whether or not the note can be snoozed.
     */
    public function get_is_snoozable($context = 'view')
    {
    }
    /**
     * Get actions on the note (if any).
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_actions($context = 'view')
    {
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
    }
    /**
     * Get note layout (the old notes won't have one).
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_layout($context = 'view')
    {
    }
    /**
     * Get note image (if any).
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_image($context = 'view')
    {
    }
    /**
     * Get deleted status.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return bool
     */
    public function get_is_deleted($context = 'view')
    {
    }
    /**
     * Get is_read status.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return bool
     */
    public function get_is_read($context = 'view')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    |
    | Methods for setting note data. These should not update anything in the
    | database itself and should only change what is stored in the class
    | object.
    |
    */
    /**
     * Set note name.
     *
     * @param string $name Note name.
     */
    public function set_name($name)
    {
    }
    /**
     * Set note type.
     *
     * @param string $type Note type.
     */
    public function set_type($type)
    {
    }
    /**
     * Set note locale.
     *
     * @param string $locale Note locale.
     */
    public function set_locale($locale)
    {
    }
    /**
     * Set note title.
     *
     * @param string $title Note title.
     */
    public function set_title($title)
    {
    }
    /**
     * Set note icon (Deprecated).
     *
     * @param string $icon Note icon.
     */
    public function set_icon($icon)
    {
    }
    /**
     * Set note content.
     *
     * @param string $content Note content.
     */
    public function set_content($content)
    {
    }
    /**
     * Set note data for potential re-localization.
     *
     * @todo Set a default empty array? https://github.com/woocommerce/woocommerce-admin/pull/1763#pullrequestreview-212442921.
     * @param object $content_data Note data.
     */
    public function set_content_data($content_data)
    {
    }
    /**
     * Set note status.
     *
     * @param string $status Note status.
     */
    public function set_status($status)
    {
    }
    /**
     * Set note source.
     *
     * @param string $source Note source.
     */
    public function set_source($source)
    {
    }
    /**
     * Set date note was created. NULL is not allowed
     *
     * @param string|integer $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed.
     */
    public function set_date_created($date)
    {
    }
    /**
     * Set date admin should be reminded of note. NULL IS allowed
     *
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if there is no date.
     */
    public function set_date_reminder($date)
    {
    }
    /**
     * Set note snoozability.
     *
     * @param bool $is_snoozable Whether or not the note can be snoozed.
     */
    public function set_is_snoozable($is_snoozable)
    {
    }
    /**
     * Clear actions from a note.
     */
    public function clear_actions()
    {
    }
    /**
     * Set note layout.
     *
     * @param string $layout Note layout.
     */
    public function set_layout($layout)
    {
    }
    /**
     * Set note image.
     *
     * @param string $image Note image.
     */
    public function set_image($image)
    {
    }
    /**
     * Set note deleted status. NULL is not allowed
     *
     * @param bool $is_deleted Note deleted status.
     */
    public function set_is_deleted($is_deleted)
    {
    }
    /**
     * Set note is_read status. NULL is not allowed
     *
     * @param bool $is_read Note is_read status.
     */
    public function set_is_read($is_read)
    {
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
    public function add_action($name, $label, $url = '', $status = self::E_WC_ADMIN_NOTE_ACTIONED, $primary = false, $actioned_text = '')
    {
    }
    /**
     * Set actions on a note.
     *
     * @param array $actions Note actions.
     */
    public function set_actions($actions)
    {
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
    }
}