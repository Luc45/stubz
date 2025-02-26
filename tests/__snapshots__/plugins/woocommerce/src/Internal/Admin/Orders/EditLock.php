<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders;

/**
 * This class takes care of the edit lock logic when HPOS is enabled.
 * For better interoperability with WordPress, edit locks are stored in the same format as posts. That is, as a metadata
 * in the order object (key: '_edit_lock') in the format "timestamp:user_id".
 *
 * @since 7.8.0
 */
class EditLock extends \
{
    const META_KEY_NAME = '_edit_lock';

    /**
     * Obtains lock information for a given order. If the lock has expired or it's assigned to an invalid user,
     * the order is no longer considered locked.
     *
     * @param \WC_Order $order Order to check.
     * @return bool|array
     */
    public function get_lock(WC_Order $order)
    {
        // stub
    }

    /**
     * Checks whether the order is being edited (i.e. locked) by another user.
     *
     * @param \WC_Order $order Order to check.
     * @return bool TRUE if order is locked and currently being edited by another user. FALSE otherwise.
     */
    public function is_locked_by_another_user(WC_Order $order): bool
    {
        // stub
    }

    /**
     * Checks whether the order is being edited by any user.
     *
     * @param \WC_Order $order Order to check.
     * @return boolean TRUE if order is locked and currently being edited by a user. FALSE otherwise.
     */
    public function is_locked(WC_Order $order): bool
    {
        // stub
    }

    /**
     * Assigns an order's edit lock to the current user.
     *
     * @param \WC_Order $order The order to apply the lock to.
     * @return array|bool FALSE if no user is logged-in, an array in the same format as {@see get_lock()} otherwise.
     */
    public function lock(WC_Order $order)
    {
        // stub
    }

    /**
     * Hooked to 'heartbeat_received' on the edit order page to refresh the lock on an order being edited by the current user.
     *
     * @param array $response The heartbeat response to be sent.
     * @param array $data     Data sent through the heartbeat.
     * @return array Response to be sent.
     */
    public function refresh_lock_ajax($response, $data)
    {
        // stub
    }

    /**
     * Hooked to 'heartbeat_received' on the orders screen to refresh the locked status of orders in the list table.
     *
     * @param array $response The heartbeat response to be sent.
     * @param array $data     Data sent through the heartbeat.
     * @return array Response to be sent.
     */
    public function check_locked_orders_ajax($response, $data)
    {
        // stub
    }

    /**
     * Outputs HTML for the lock dialog based on the status of the lock on the order (if any).
     * Depending on who owns the lock, this could be a message with the chance to take over or a message indicating that
     * someone else has taken over the order.
     *
     * @param \WC_Order $order Order object.
     * @return void
     */
    public function render_dialog($order)
    {
        // stub
    }

}

