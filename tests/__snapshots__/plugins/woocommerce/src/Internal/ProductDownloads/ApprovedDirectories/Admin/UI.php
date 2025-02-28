<?php

namespace Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\Admin;

/**
 * Manages user interactions for product download URL safety.
 */
class UI
{
    /**
     * Sets up UI controls for product download URLs.
     *
     * @internal
     *
     * @param Register $register Register of approved directories.
     */
    final public function init(Automattic\WooCommerce\Internal\ProductDownloads\ApprovedDirectories\Register $register)
{
}
    /**
     * Performs any work needed to add hooks and otherwise integrate with the wider system,
     * except in the case where the current user is not a site administrator, no hooks will
     * be initialized.
     */
    final public function init_hooks()
{
}
    /**
     * Injects our new settings section (when approved directory rules are disabled, it will not show).
     *
     * @param array $sections Other admin settings sections.
     *
     * @return array
     */
    public function add_section(array $sections): array
{
}
    /**
     * Sets up the table, renders any notices and processes actions as needed.
     */
    public function setup()
{
}
    /**
     * Renders the UI.
     */
    public function render()
{
}
}