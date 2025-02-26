<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * Class with utility methods for dealing with webhooks.
 */
class WebhookUtil extends \
{
    /**
     * Creates a new instance of the class.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Whenever a user is deleted, re-assign their webhooks to the new user.
     *
     * If re-assignment isn't selected during deletion, assign the webhooks to user_id 0,
     * so that an admin can edit and re-save them in order to get them to be assigned to a valid user.
     *
     * @param int      $old_user_id ID of the deleted user.
     * @param int|null $new_user_id ID of the user to reassign existing data to, or null if no re-assignment is requested.
     *
     * @return void
     * @since 7.8.0
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function reassign_webhooks_to_new_user_id(int $old_user_id, int|null $new_user_id): void
    {
        // stub
    }

    /**
     * When users are about to be deleted show an informative text if they have webhooks assigned.
     *
     * @param \WP_User $current_user The current logged in user.
     * @param array    $userids Array with the ids of the users that are about to be deleted.
     * @return void
     * @since 7.8.0
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function maybe_render_user_with_webhooks_warning(WP_User $current_user, array $userids): void
    {
        // stub
    }

    /**
     * Get the ids of the webhooks assigned to a given user.
     *
     * @param int $user_id User id.
     * @return int[] Array of webhook ids.
     */
    private function get_webhook_ids_for_user(int $user_id): array
    {
        // stub
    }

    /**
     * Gets the count of webhooks that are configured to use the Legacy REST API to compose their payloads.
     *
     * @param bool $clear_cache If true, the previously cached value of the count will be discarded if it exists.
     *
     * @return int
     */
    public function get_legacy_webhooks_count(bool $clear_cache = false): int
    {
        // stub
    }

}

