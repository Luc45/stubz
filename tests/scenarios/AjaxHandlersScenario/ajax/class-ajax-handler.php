<?php
namespace AjaxHandlersScenario\ajax;

/**
 * Handles AJAX requests for the plugin.
 */
class AjaxHandler {
    public function register(): void {
        add_action('wp_ajax_do_something', [ $this, 'handleDoSomething' ]);
        add_action('wp_ajax_nopriv_do_something', [ $this, 'handleDoSomething' ]);
    }

    public function handleDoSomething(): void {
        // Typically you'd do something like:
        // check_ajax_referer(...), do stuff, then wp_send_json_success or wp_send_json_error
        wp_send_json_success([ 'message' => 'Done something' ]);
    }
}
