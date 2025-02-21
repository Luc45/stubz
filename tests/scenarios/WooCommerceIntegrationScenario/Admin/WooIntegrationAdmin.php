<?php
namespace WooCommerceIntegrationScenario\Admin;

/**
 * A separate admin class to manage back-end settings or screens.
 */
class WooIntegrationAdmin {
    public function init(): void {
        add_action('admin_menu', [ $this, 'addAdminPage' ]);
    }

    public function addAdminPage(): void {
        add_submenu_page(
            'woocommerce',
            'Woo Integration Settings',
            'Woo Integration',
            'manage_options',
            'woo-integration-settings',
            [ $this, 'renderSettingsPage' ]
        );
    }

    public function renderSettingsPage(): void {
        echo '<h1>Woo Integration Settings</h1>';
        echo '<p>Here you can configure the integration.</p>';
    }
}
