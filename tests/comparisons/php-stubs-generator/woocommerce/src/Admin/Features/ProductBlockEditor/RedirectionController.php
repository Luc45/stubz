<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor;

/**
 * Handle redirecting to the old or new editor based on features and support.
 */
class RedirectionController
{
    /**
     * Set up the hooks used for redirection.
     */
    public function __construct()
    {
    }
    /**
     * Check if the current screen is the legacy add product screen.
     */
    protected function is_legacy_add_new_screen(): bool
    {
    }
    /**
     * Check if the current screen is the legacy edit product screen.
     */
    protected function is_legacy_edit_screen(): bool
    {
    }
    /**
     * Check if a product is supported by the new experience.
     *
     * @param integer $product_id Product ID.
     */
    protected function is_product_supported($product_id): bool
    {
    }
    /**
     * Check if a product is supported by the new experience.
     *
     * @param array $product_templates The registered product templates.
     */
    public function set_product_templates(array $product_templates): void
    {
    }
    /**
     * Redirects from old product form to the new product form if the
     * feature `product_block_editor` is enabled.
     */
    public function maybe_redirect_to_new_editor(): void
    {
    }
    /**
     * Redirects from new product form to the old product form if the
     * feature `product_block_editor` is enabled.
     */
    public function maybe_redirect_to_old_editor(): void
    {
    }
    /**
     * Get the parsed WooCommerce Admin path.
     */
    protected function get_parsed_route(): array
    {
    }
    /**
     * Redirect non supported product types to legacy editor.
     */
    public function redirect_non_supported_product_types(): void
    {
    }
}
