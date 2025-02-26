<?php

namespace Automattic\WooCommerce\Admin\Marketing;

/**
 * MarketingCampaignType class
 *
 * @since x.x.x
 */
class MarketingCampaignType extends \
{
    /**
     * The unique identifier.
     *
     * @var string
     */
    protected $id = null;

    /**
     * The marketing channel that this campaign type belongs to.
     *
     * @var MarketingChannelInterface
     */
    protected $channel = null;

    /**
     * Name of the marketing campaign type.
     *
     * @var string
     */
    protected $name = null;

    /**
     * Description of the marketing campaign type.
     *
     * @var string
     */
    protected $description = null;

    /**
     * The URL to the create campaign page.
     *
     * @var string
     */
    protected $create_url = null;

    /**
     * The URL to an image/icon for the campaign type.
     *
     * @var string
     */
    protected $icon_url = null;

    /**
     * MarketingCampaignType constructor.
     *
     * @param string                    $id          A unique identifier for the campaign type.
     * @param MarketingChannelInterface $channel     The marketing channel that this campaign type belongs to.
     * @param string                    $name        Name of the marketing campaign type.
     * @param string                    $description Description of the marketing campaign type.
     * @param string                    $create_url  The URL to the create campaign page.
     * @param string                    $icon_url    The URL to an image/icon for the campaign type.
     */
    public function __construct(string $id, Automattic\WooCommerce\Admin\Marketing\MarketingChannelInterface $channel, string $name, string $description, string $create_url, string $icon_url)
    {
        // stub
    }

    /**
     * Returns the marketing campaign's unique identifier.
     *
     * @return string
     */
    public function get_id(): string
    {
        // stub
    }

    /**
     * Returns the marketing channel that this campaign type belongs to.
     *
     * @return MarketingChannelInterface
     */
    public function get_channel(): Automattic\WooCommerce\Admin\Marketing\MarketingChannelInterface
    {
        // stub
    }

    /**
     * Returns the name of the marketing campaign type.
     *
     * @return string
     */
    public function get_name(): string
    {
        // stub
    }

    /**
     * Returns the description of the marketing campaign type.
     *
     * @return string
     */
    public function get_description(): string
    {
        // stub
    }

    /**
     * Returns the URL to the create campaign page.
     *
     * @return string
     */
    public function get_create_url(): string
    {
        // stub
    }

    /**
     * Returns the URL to an image/icon for the campaign type.
     *
     * @return string
     */
    public function get_icon_url(): string
    {
        // stub
    }

}

