<?php
namespace AjaxHandlersScenario;

/**
 * Main plugin file that initializes all AJAX handlers.
 */
class AjaxMain {
    public function init(): void {
        // Suppose we have some handler class in the "ajax" folder
        require_once __DIR__ . '/ajax/class-ajax-handler.php';

        // Instantiate and register
        $handler = new \AjaxHandlersScenario\ajax\AjaxHandler();
        $handler->register();
    }
}
