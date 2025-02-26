<?php

namespace ;

/**
 * Marketplace suggestions core behaviour.
 */
class WC_Marketplace_Suggestions extends \
{
    /**
     * Initialise.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Product data tabs filter
     *
     * Adds a new Extensions tab to the product data meta box.
     *
     * @param array $tabs Existing tabs.
     *
     * @return array
     */
    public static function product_data_tabs($tabs)
    {
        // stub
    }

    /**
     * Render additional panels in the product data metabox.
     */
    public static function product_data_panels()
    {
        // stub
    }

    /**
     * Return an array of suggestions the user has dismissed.
     */
    public static function get_dismissed_suggestions()
    {
        // stub
    }

    /**
     * POST handler for adding a dismissed suggestion.
     */
    public static function post_add_dismissed_suggestion_handler()
    {
        // stub
    }

    /**
     * Render suggestions containers in products list empty state.
     */
    public static function render_products_list_empty_state()
    {
        // stub
    }

    /**
     * Render suggestions containers in orders list empty state.
     */
    public static function render_orders_list_empty_state()
    {
        // stub
    }

    /**
     * Render a suggestions container element, with the specified context.
     *
     * @param string $context Suggestion context name (rendered as a css class).
     */
    public static function render_suggestions_container($context)
    {
        // stub
    }

    /**
     * Should suggestions be displayed?
     *
     * @param string $screen_id The current admin screen.
     *
     * @return bool
     */
    public static function show_suggestions_for_screen($screen_id)
    {
        // stub
    }

    /**
     * Should suggestions be displayed?
     *
     * @return bool
     */
    public static function allow_suggestions()
    {
        // stub
    }

    /**
     * Pull suggestion data from options. This is retrieved from a remote endpoint.
     *
     * @return array of json API data
     */
    public static function get_suggestions_api_data()
    {
        // stub
    }

}

