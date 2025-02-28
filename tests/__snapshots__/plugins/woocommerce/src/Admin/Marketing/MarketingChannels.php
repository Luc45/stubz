<?php

namespace Automattic\WooCommerce\Admin\Marketing;

/**
 * MarketingChannels repository class
 *
 * @since x.x.x
 */
class MarketingChannels
{
    /**
     * Registers a marketing channel.
     *
     * @param MarketingChannelInterface $channel The marketing channel to register.
     *
     * @return void
     *
     * @throws Exception If the given marketing channel is already registered.
     */
    public function register(Automattic\WooCommerce\Admin\Marketing\MarketingChannelInterface $channel): void
{
}
    /**
     * Unregisters all marketing channels.
     *
     * @return void
     */
    public function unregister_all(): void
{
}
    /**
     * Returns an array of all registered marketing channels.
     *
     * @return MarketingChannelInterface[]
     */
    public function get_registered_channels(): array
{
}
}