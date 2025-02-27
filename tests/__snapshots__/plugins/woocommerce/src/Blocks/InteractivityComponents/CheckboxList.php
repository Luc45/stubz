<?php

namespace Automattic\WooCommerce\Blocks\InteractivityComponents;

/**
 * CheckboxList class. This is a component for reuse with interactivity API.
 *
 * @package Automattic\WooCommerce\Blocks\InteractivityComponents
 */
class CheckboxList
{
    /**
     * Render the checkbox list.
     *
     * @param mixed $props The properties to render the dropdown with.
     *                  items: array of objects with label and value properties.
     *                      - id: string of the id to use for the checkbox (optional).
     *                      - checked: boolean to indicate if the checkbox is checked.
     *                      - label: string of the label to display (plaintext or HTML).
     *                      - aria_label: string of the aria label to use for the checkbox. (optional, plaintext only).
     *                      - value: string of the value to use.
     *                  on_change: string of the action to perform when the dropdown changes.
     * @return string|false
     */
    public static function render($props)
    {
        // stub
    }

}