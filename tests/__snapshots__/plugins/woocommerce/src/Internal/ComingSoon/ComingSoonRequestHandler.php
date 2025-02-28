<?php

namespace Automattic\WooCommerce\Internal\ComingSoon;

/**
 * Handles the template_include hook to determine whether the current page needs
 * to be replaced with a coming soon screen.
 */
class ComingSoonRequestHandler
{
    /**
     * Coming soon helper.
     *
     * @var ComingSoonHelper
     */
    private $coming_soon_helper = null;
    /**
     * Sets up the hook.
     *
     * @internal
     *
     * @param ComingSoonHelper $coming_soon_helper Dependency.
     */
    final public function init(Automattic\WooCommerce\Internal\ComingSoon\ComingSoonHelper $coming_soon_helper)
{
}
    /**
     * Replaces the page template with a 'coming soon' when the site is in coming soon mode.
     *
     * @internal
     *
     * @param string $template The path to the previously determined template.
     * @return string The path to the 'coming soon' template or any empty string to prevent further template loading in FSE themes.
     */
    public function handle_template_include($template)
{
}
    /**
     * Determines whether the coming soon screen should be shown.
     *
     * @param \WP $wp Current WordPress environment instance.
     *
     * @return bool
     */
    private function should_show_coming_soon(WP &$wp)
{
}
    /**
     * Filters the theme.json data to add the Inter and Cardo fonts when they don't exist.
     *
     * @param WP_Theme_JSON $theme_json The theme json object.
     */
    public function experimental_filter_theme_json_theme($theme_json)
{
}
    /**
     * Enqueues the coming soon banner styles.
     */
    public function enqueue_styles()
{
}
}