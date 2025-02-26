<?php

namespace Automattic\WooCommerce\Internal\Admin\ProductReviews;

/**
 * Tweaks the WordPress comments page to exclude reviews.
 */
class ReviewsCommentsOverrides extends \
{
    const REVIEWS_MOVED_NOTICE_ID = 'product_reviews_moved';

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Renders admin notices.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function display_notices(): void
    {
        // stub
    }

    /**
     * May render an admin notice informing the user that reviews were moved to a new page.
     *
     * @return void
     */
    protected function maybe_display_reviews_moved_notice(): void
    {
        // stub
    }

    /**
     * Checks if the admin notice informing the user that reviews were moved to a new page should be displayed.
     *
     * @return bool
     */
    protected function should_display_reviews_moved_notice(): bool
    {
        // stub
    }

    /**
     * Renders an admin notice informing the user that reviews were moved to a new page.
     *
     * @return void
     */
    protected function display_reviews_moved_notice(): void
    {
        // stub
    }

    /**
     * Gets the capability required to dismiss the notice.
     *
     * This is required so that users who do not have the manage_woocommerce capability (e.g. Editors) can still dismiss
     * the notice displayed in the Comments page.
     *
     * @param string|mixed $default_capability The default required capability.
     * @param string|mixed $notice_name The notice name.
     * @return string
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function get_dismiss_capability($default_capability, $notice_name)
    {
        // stub
    }

    /**
     * Excludes product reviews from showing in the comments page.
     *
     * @param array|mixed $args {@see WP_Comment_Query} query args.
     * @return array
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function exclude_reviews_from_comments($args): array
    {
        // stub
    }

}

