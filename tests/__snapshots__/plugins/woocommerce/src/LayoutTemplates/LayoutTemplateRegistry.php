<?php

namespace Automattic\WooCommerce\LayoutTemplates;

/**
 * Layout template registry.
 */
final class LayoutTemplateRegistry
{
    /**
     * Class instance.
     *
     * @var LayoutTemplateRegistry|null
     */
    private static $instance = null;
    /**
     * Layout templates info.
     *
     * @var array
     */
    protected $layout_templates_info = array();
    /**
     * Layout template instances.
     *
     * @var array
     */
    protected $layout_template_instances = array();
    /**
     * Get the instance of the class.
     */
    public static function get_instance(): Automattic\WooCommerce\LayoutTemplates\LayoutTemplateRegistry
{
}
    /**
     * Unregister all layout templates.
     */
    public function unregister_all()
{
}
    /**
     * Check if a layout template is registered.
     *
     * @param string $layout_template_id Layout template ID.
     */
    public function is_registered($layout_template_id): bool
{
}
    /**
     * Register a single layout template.
     *
     * @param string $layout_template_id         Layout template ID.
     * @param string $layout_template_area       Layout template area.
     * @param string $layout_template_class_name Layout template class to register.
     *
     * @throws \ValueError If a layout template with the same ID already exists.
     * @throws \ValueError If the specified layout template area is empty.
     * @throws \ValueError If the specified layout template class does not exist.
     * @throws \ValueError If the specified layout template class does not implement the BlockTemplateInterface.
     */
    public function register($layout_template_id, $layout_template_area, $layout_template_class_name)
{
}
    /**
     * Instantiate the matching layout templates and return them.
     *
     * @param array $query_params Query params.
     */
    public function instantiate_layout_templates(array $query_params = array()): array
{
}
    /**
     * Instantiate a single layout template and return it.
     *
     * @param array $layout_template_info Layout template info.
     */
    private function get_layout_template_instance($layout_template_info): Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface
{
}
    /**
     * Get matching layout templates info.
     *
     * @param array $query_params Query params.
     */
    private function get_matching_layout_templates_info(array $query_params = array()): array
{
}
}