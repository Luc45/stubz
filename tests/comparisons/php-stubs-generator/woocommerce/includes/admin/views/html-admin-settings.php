<?php

/**
 * The current WC admin settings tab ID.
 *
 * @var string $current_tab
 */
/**
 * The current WC admin settings section ID.
 *
 * @var string $current_section
 */
$tab_exists = isset($tabs[$current_tab]) || \has_action('woocommerce_sections_' . $current_tab) || \has_action('woocommerce_settings_' . $current_tab) || \has_action('woocommerce_settings_tabs_' . $current_tab);