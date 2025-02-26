<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Customize Your Store Task
 *
 * @internal
 */
class CustomizeStore extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
{
    /**
     * Constructor
     *
     * @param TaskList $task_list Parent task list.
     */
    public function __construct($task_list)
    {
        // stub
    }

    /**
     * Mark the CYS task as complete whenever the user updates their global styles.
     *
     * @param int     $post_id Post ID.
     * @param WP_Post $post Post object.
     * @param bool    $update Whether this is an existing post being updated.
     *
     * @return void
     */
    public function mark_task_as_complete_block_theme($post_id, $post, $update)
    {
        // stub
    }

    /**
     * Mark the CYS task as complete whenever the user saves the customizer changes.
     *
     * @return void
     */
    public function mark_task_as_complete_classic_theme()
    {
        // stub
    }

    /**
     * ID.
     *
     * @return string
     */
    public function get_id()
    {
        // stub
    }

    /**
     * Title.
     *
     * @return string
     */
    public function get_title()
    {
        // stub
    }

    /**
     * Content.
     *
     * @return string
     */
    public function get_content()
    {
        // stub
    }

    /**
     * Time.
     *
     * @return string
     */
    public function get_time()
    {
        // stub
    }

    /**
     * Task completion.
     *
     * @return bool
     */
    public function is_complete()
    {
        // stub
    }

    /**
     * Task visibility.
     *
     * @return bool
     */
    public function can_view()
    {
        // stub
    }

    /**
     * Action URL.
     *
     * @return string
     */
    public function get_action_url()
    {
        // stub
    }

    /**
     * Possibly add site editor scripts.
     */
    public function possibly_add_site_editor_scripts()
    {
        // stub
    }

    /**
     * Appends a small style to hide admin bar
     *
     * @param bool $show Whether to show the admin bar.
     */
    public function possibly_hide_wp_admin_bar($show)
    {
        // stub
    }

    /**
     * Runs script and add styles to remove unwanted elements and hide scrollbar
     * when users are viewing with ?cys-hide-admin-bar=true.
     *
     * @return void
     */
    public function possibly_remove_unwanted_ui_elements()
    {
        // stub
    }

    /**
     * Checks if the post has custom global styles stored (if it is different from the default global styles).
     *
     * @param WP_Post $post The post object.
     * @return bool
     */
    private function has_custom_global_styles(WP_Post $post)
    {
        // stub
    }

    /**
     * Checks if the post is a template or a template part.
     *
     * @param WP_Post $post The post object.
     * @return bool Whether the post is a template or a template part.
     */
    private function has_custom_template(WP_Post $post)
    {
        // stub
    }

}

