<?php
/**
 * WC_Admin_Dashboard Class.
 */
class WC_Admin_Dashboard
{
    /**
     * Hook in tabs.
     */
    public function __construct()
{
}
    /**
     * Init dashboard widgets.
     */
    public function init()
{
}
    /**
     * Register the network order dashboard widget.
     */
    public function register_network_order_widget()
{
}
    /**
     * Check to see if we should display the widget.
     *
     * @return bool
     */
    private function should_display_widget()
{
}
    /**
     * Get top seller from DB.
     *
     * @return object
     */
    private function get_top_seller()
{
}
    /**
     * Show status widget.
     */
    public function status_widget()
{
}
    /**
     * Show order data is status widget.
     */
    private function status_widget_order_rows()
{
}
    /**
     * Show stock data is status widget.
     *
     * @param string $lowstock_link Low stock link.
     * @param string $outofstock_link Out of stock link.
     */
    private function status_widget_stock_rows($lowstock_link, $outofstock_link)
{
}
    /**
     * Recent reviews widget.
     */
    public function recent_reviews()
{
}
    /**
     * Network orders widget.
     */
    public function network_orders()
{
}
    /**
     * Gets the sales performance data from the new WooAdmin store.
     *
     * @return stdClass|WP_Error|WP_REST_Response
     */
    private function get_wc_admin_performance_data()
{
}
    /**
     * Prepares the data for a sparkline to show sales in the last X days.
     *
     * @param  int    $id ID of the product to show. Blank to get all orders.
     * @param  int    $days Days of stats to get. Default to 7 days.
     * @param  string $type Type of sparkline to get. Ignored if ID is not set.
     * @return array
     */
    private function get_sales_sparkline($id = '', $days = 7, $type = 'sales')
{
}
    /**
     * Prepares the markup for a sparkline to show sales in the last X days with the given data.
     *
     * @param  string $type Type of sparkline to form the markup.
     * @param  int    $days Days of stats to form the markup.
     * @param  int    $total Total income or items sold to form the markup.
     * @param  array  $sparkline_data Sparkline data to form the markup.
     * @return string
     */
    private function sales_sparkline_markup($type, $days, $total, $sparkline_data)
{
}
}
