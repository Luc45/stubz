<?php

namespace Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\Admin;

/**
 * Adds tools to the Status > Tools page that can be used to (re-)initiate or stop a synchronization process
 * for Approved Download Directories.
 */
class SyncUI
{
    /**
     * The active register of approved directories.
     *
     * @var Register
     */
    private $register = null;

    /**
     * Sets up UI controls for product download URLs.
     *
     * @internal
     *
     * @param Register $register Register of approved directories.
     */
    public final function init(Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\Register $register)
    {
        // stub
    }

    /**
     * Performs any work needed to add hooks and otherwise integrate with the wider system,
     * except in the case where the current user is not a site administrator, no hooks will
     * be initialized.
     */
    public final function init_hooks()
    {
        // stub
    }

    /**
     * Adds Approved Directory list-related entries to the tools page.
     *
     * @param array $tools Admin tool definitions.
     *
     * @return array
     */
    public function add_tools(array $tools): array
    {
        // stub
    }

    /**
     * Triggers a new migration.
     */
    public function trigger_sync()
    {
        // stub
    }

    /**
     * Clears all existing rules from the Approved Directories list.
     */
    public function clear_existing_entries()
    {
        // stub
    }

    /**
     * If a migration is in progress, this will attempt to cancel it.
     */
    public function cancel_sync()
    {
        // stub
    }

    /**
     * Makes sure the user has appropriate permissions and that we have a valid nonce.
     */
    private function security_check()
    {
        // stub
    }

}

