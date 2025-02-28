<?php

namespace Automattic\WooCommerce\Admin\Marketing;

/**
 * MarketingCampaign class
 *
 * @since x.x.x
 */
class MarketingCampaign
{
    /**
     * The unique identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * The marketing campaign type.
     *
     * @var MarketingCampaignType
     */
    protected $type;
    /**
     * Title of the marketing campaign.
     *
     * @var string
     */
    protected $title;
    /**
     * The URL to the channel's campaign management page.
     *
     * @var string
     */
    protected $manage_url;
    /**
     * The cost of the marketing campaign with the currency.
     *
     * @var Price
     */
    protected $cost;
    /**
     * The sales of the marketing campaign with the currency.
     *
     * @var Price
     */
    protected $sales;
    /**
     * MarketingCampaign constructor.
     *
     * @param string                $id         The marketing campaign's unique identifier.
     * @param MarketingCampaignType $type       The marketing campaign type.
     * @param string                $title      The title of the marketing campaign.
     * @param string                $manage_url The URL to the channel's campaign management page.
     * @param Price|null            $cost       The cost of the marketing campaign with the currency.
     * @param Price|null            $sales      The sales of the marketing campaign with the currency.
     */
    public function __construct(string $id, Automattic\WooCommerce\Admin\Marketing\MarketingCampaignType $type, string $title, string $manage_url, Automattic\WooCommerce\Admin\Marketing\Price|null $cost = null, Automattic\WooCommerce\Admin\Marketing\Price|null $sales = null)
{
}
    /**
     * Returns the marketing campaign's unique identifier.
     *
     * @return string
     */
    public function get_id(): string
{
}
    /**
     * Returns the marketing campaign type.
     *
     * @return MarketingCampaignType
     */
    public function get_type(): Automattic\WooCommerce\Admin\Marketing\MarketingCampaignType
{
}
    /**
     * Returns the title of the marketing campaign.
     *
     * @return string
     */
    public function get_title(): string
{
}
    /**
     * Returns the URL to manage the marketing campaign.
     *
     * @return string
     */
    public function get_manage_url(): string
{
}
    /**
     * Returns the cost of the marketing campaign with the currency.
     *
     * @return Price|null
     */
    public function get_cost(): Automattic\WooCommerce\Admin\Marketing\Price|null
{
}
    /**
     * Returns the sales of the marketing campaign with the currency.
     *
     * @return Price|null
     */
    public function get_sales(): Automattic\WooCommerce\Admin\Marketing\Price|null
{
}
}