<?php

namespace Automattic\WooCommerce\Internal\Admin\ProductReviews;

/**
 * A utility class for handling comments that are product reviews.
 */
class ReviewsUtil extends \
{
    /**
     * Removes product reviews from the edit-comments page to fix the "Mine" tab counter.
     *
     * @param  array|mixed $clauses A compacted array of comment query clauses.
     * @return array|mixed
     */
    public static function comments_clauses_without_product_reviews($clauses)
    {
        // stub
    }

}

