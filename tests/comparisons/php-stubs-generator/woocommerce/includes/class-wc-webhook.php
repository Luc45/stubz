<?php

/**
 * Webhook class.
 */
class WC_Webhook extends \WC_Legacy_Webhook
{
    /**
     * Store which object IDs this webhook has processed (ie scheduled to be delivered)
     * within the current page request.
     *
     * @var array
     */
    protected $processed = array();
    /**
     * Stores webhook data.
     *
     * @var array
     */
    protected $data = array('date_created' => \null, 'date_modified' => \null, 'status' => 'disabled', 'delivery_url' => '', 'secret' => '', 'name' => '', 'topic' => '', 'hooks' => '', 'resource' => '', 'event' => '', 'failure_count' => 0, 'user_id' => 0, 'api_version' => 3, 'pending_delivery' => \false);
    /**
     * Load webhook data based on how WC_Webhook is called.
     *
     * @param WC_Webhook|int $data Webhook ID or data.
     * @throws Exception If webhook cannot be read/found and $data is set.
     */
    public function __construct($data = 0)
    {
    }
    /**
     * Enqueue the hooks associated with the webhook.
     *
     * @since 2.2.0
     */
    public function enqueue()
    {
    }
    /**
     * Process the webhook for delivery by verifying that it should be delivered.
     * and scheduling the delivery (in the background by default, or immediately).
     *
     * @since  2.2.0
     * @param  mixed $arg The first argument provided from the associated hooks.
     * @return mixed $arg Returns the argument in case the webhook was hooked into a filter.
     */
    public function process($arg)
    {
    }
    /**
     * Checks if the specified resource has already been queued for delivery within the current request.
     *
     * Helps avoid duplication of data being sent for topics that have more than one hook defined.
     *
     * @param mixed $arg First hook argument.
     *
     * @return bool
     */
    protected function is_already_processed($arg)
    {
    }
    /**
     * Deliver the webhook payload using wp_safe_remote_request().
     *
     * @since 2.2.0
     * @param mixed $arg First hook argument.
     */
    public function deliver($arg)
    {
    }
    /**
     * Build the payload data for the webhook.
     *
     * @param mixed $resource_id First hook argument, typically the resource ID.
     * @return mixed              Payload data.
     * @throws \Exception The webhook is configured to use the Legacy REST API, but the Legacy REST API plugin is not available.
     * @since  2.2.0
     */
    public function build_payload($resource_id)
    {
    }
    /**
     * Generate a base64-encoded HMAC-SHA256 signature of the payload body so the
     * recipient can verify the authenticity of the webhook. Note that the signature
     * is calculated after the body has already been encoded (JSON by default).
     *
     * @since  2.2.0
     * @param  string $payload Payload data to hash.
     * @return string
     */
    public function generate_signature($payload)
    {
    }
    /**
     * Generate a new unique hash as a delivery id based on current time and wehbook id.
     * Return the hash for inclusion in the webhook request.
     *
     * @since  2.2.0
     * @return string
     */
    public function get_new_delivery_id()
    {
    }
    /**
     * Log the delivery request/response.
     *
     * @since 2.2.0
     * @param string         $delivery_id Previously created hash.
     * @param array          $request     Request data.
     * @param array|WP_Error $response    Response data.
     * @param float          $duration    Request duration.
     */
    public function log_delivery($delivery_id, $request, $response, $duration)
    {
    }
    /**
     * Get the delivery logs for this webhook.
     *
     * @since  3.3.0
     * @return string
     */
    public function get_delivery_logs()
    {
    }
    /**
     * Get the delivery log specified by the ID. The delivery log includes:
     *
     * + duration
     * + summary
     * + request method/url
     * + request headers/body
     * + response code/message/headers/body
     *
     * @since 2.2
     * @deprecated 3.3.0
     * @param int $delivery_id Delivery ID.
     * @return void
     */
    public function get_delivery_log($delivery_id)
    {
    }
    /**
     * Send a test ping to the delivery URL, sent when the webhook is first created.
     *
     * @since  2.2.0
     * @return bool|WP_Error
     */
    public function deliver_ping()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */
    /**
     * Get the friendly name for the webhook.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_name($context = 'view')
    {
    }
    /**
     * Get the webhook status.
     *
     * - 'active' - delivers payload.
     * - 'paused' - does not deliver payload, paused by admin.
     * - 'disabled' - does not delivery payload, paused automatically due to consecutive failures.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return string status
     */
    public function get_status($context = 'view')
    {
    }
    /**
     * Get webhook created date.
     *
     * @since  3.2.0
     * @param  string $context  What the value is for.
     *                          Valid values are 'view' and 'edit'.
     * @return WC_DateTime|null Object if the date is set or null if there is no date.
     */
    public function get_date_created($context = 'view')
    {
    }
    /**
     * Get webhook modified date.
     *
     * @since  3.2.0
     * @param  string $context  What the value is for.
     *                          Valid values are 'view' and 'edit'.
     * @return WC_DateTime|null Object if the date is set or null if there is no date.
     */
    public function get_date_modified($context = 'view')
    {
    }
    /**
     * Get the secret used for generating the HMAC-SHA256 signature.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_secret($context = 'view')
    {
    }
    /**
     * Get the webhook topic, e.g. `order.created`.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_topic($context = 'view')
    {
    }
    /**
     * Get the delivery URL.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_delivery_url($context = 'view')
    {
    }
    /**
     * Get the user ID for this webhook.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return int
     */
    public function get_user_id($context = 'view')
    {
    }
    /**
     * API version.
     *
     * @since  3.0.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_api_version($context = 'view')
    {
    }
    /**
     * Get the failure count.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return int
     */
    public function get_failure_count($context = 'view')
    {
    }
    /**
     * Get pending delivery.
     *
     * @since  3.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return bool
     */
    public function get_pending_delivery($context = 'view')
    {
    }
    /*
    	|--------------------------------------------------------------------------
    	| Setters
    	|--------------------------------------------------------------------------
    */
    /**
     * Set webhook name.
     *
     * @since 3.2.0
     * @param string $name Webhook name.
     */
    public function set_name($name)
    {
    }
    /**
     * Set webhook created date.
     *
     * @since 3.2.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime.
     *                                  If the DateTime string has no timezone or offset,
     *                                  WordPress site timezone will be assumed.
     *                                  Null if their is no date.
     */
    public function set_date_created($date = \null)
    {
    }
    /**
     * Set webhook modified date.
     *
     * @since 3.2.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime.
     *                                  If the DateTime string has no timezone or offset,
     *                                  WordPress site timezone will be assumed.
     *                                  Null if their is no date.
     */
    public function set_date_modified($date = \null)
    {
    }
    /**
     * Set status.
     *
     * @since 3.2.0
     * @param string $status Status.
     */
    public function set_status($status)
    {
    }
    /**
     * Set the secret used for generating the HMAC-SHA256 signature.
     *
     * @since 2.2.0
     * @param string $secret Secret.
     */
    public function set_secret($secret)
    {
    }
    /**
     * Set the webhook topic and associated hooks.
     * The topic resource & event are also saved separately.
     *
     * @since 2.2.0
     * @param string $topic Webhook topic.
     */
    public function set_topic($topic)
    {
    }
    /**
     * Set the delivery URL.
     *
     * @since 2.2.0
     * @param string $url Delivery URL.
     */
    public function set_delivery_url($url)
    {
    }
    /**
     * Set user ID.
     *
     * @since 3.2.0
     * @param int $user_id User ID.
     */
    public function set_user_id($user_id)
    {
    }
    /**
     * Set API version.
     *
     * @since 3.0.0
     * @param int|string $version REST API version.
     */
    public function set_api_version($version)
    {
    }
    /**
     * Set pending delivery.
     *
     * @since 3.2.0
     * @param bool $pending_delivery Set true if is pending for delivery.
     */
    public function set_pending_delivery($pending_delivery)
    {
    }
    /**
     * Set failure count.
     *
     * @since 3.2.0
     * @param bool $failure_count Total of failures.
     */
    public function set_failure_count($failure_count)
    {
    }
    /**
     * Get the hook names for the webhook.
     *
     * @since  2.2.0
     * @return array
     */
    public function get_hooks()
    {
    }
    /**
     * Get the resource for the webhook, e.g. `order`.
     *
     * @since  2.2.0
     * @return string
     */
    public function get_resource()
    {
    }
    /**
     * Get the event for the webhook, e.g. `created`.
     *
     * @since  2.2.0
     * @return string
     */
    public function get_event()
    {
    }
    /**
     * Get the webhook i18n status.
     *
     * @return string
     */
    public function get_i18n_status()
    {
    }
}