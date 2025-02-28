<?php

namespace Automattic\WooCommerce\Blocks\Integrations;

/**
 * Class used for tracking registered integrations with various Block types.
 */
class IntegrationRegistry
{
    /**
     * Integration identifier is used to construct hook names and is given when the integration registry is initialized.
     *
     * @var string
     */
    protected $registry_identifier = '';
    /**
     * Registered integrations, as `$name => $instance` pairs.
     *
     * @var IntegrationInterface[]
     */
    protected $registered_integrations = [];
    /**
     * Initializes all registered integrations.
     *
     * Integration identifier is used to construct hook names and is given when the integration registry is initialized.
     *
     * @param string $registry_identifier Identifier for this registry.
     */
    public function initialize($registry_identifier = '')
    {
    }
    /**
     * Registers an integration.
     *
     * @param IntegrationInterface $integration An instance of IntegrationInterface.
     *
     * @return boolean True means registered successfully.
     */
    public function register(\Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface $integration)
    {
    }
    /**
     * Checks if an integration is already registered.
     *
     * @param string $name Integration name.
     * @return bool True if the integration is registered, false otherwise.
     */
    public function is_registered($name)
    {
    }
    /**
     * Un-register an integration.
     *
     * @param string|IntegrationInterface $name Integration name, or alternatively a IntegrationInterface instance.
     * @return boolean|IntegrationInterface Returns the unregistered integration instance if unregistered successfully.
     */
    public function unregister($name)
    {
    }
    /**
     * Retrieves a registered Integration by name.
     *
     * @param string $name Integration name.
     * @return IntegrationInterface|null The registered integration, or null if it is not registered.
     */
    public function get_registered($name)
    {
    }
    /**
     * Retrieves all registered integrations.
     *
     * @return IntegrationInterface[]
     */
    public function get_all_registered()
    {
    }
    /**
     * Gets an array of all registered integration's script handles for the editor.
     *
     * @return string[]
     */
    public function get_all_registered_editor_script_handles()
    {
    }
    /**
     * Gets an array of all registered integration's script handles.
     *
     * @return string[]
     */
    public function get_all_registered_script_handles()
    {
    }
    /**
     * Gets an array of all registered integration's script data.
     *
     * @return array
     */
    public function get_all_registered_script_data()
    {
    }
}