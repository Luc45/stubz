<?php

/**
 * Comments class.
 */
class WC_Comments
{
    /**
     * Hook in methods.
     */
    public static function init()
    {
    }
    /**
     * See if comments are open.
     *
     * @since  3.1.0
     * @param  bool $open    Whether the current post is open for comments.
     * @param  int  $post_id Post ID.
     * @return bool
     */
    public static function comments_open($open, $post_id)
    {
    }
    /**
     * Exclude order comments from queries and RSS.
     *
     * This code should exclude shop_order comments from queries. Some queries (like the recent comments widget on the dashboard) are hardcoded.
     * and are not filtered, however, the code current_user_can( 'read_post', $comment->comment_post_ID ) should keep them safe since only admin and.
     * shop managers can view orders anyway.
     *
     * The frontend view order pages get around this filter by using remove_filter('comments_clauses', array( 'WC_Comments' ,'exclude_order_comments'), 10, 1 );
     *
     * @param  array $clauses A compacted array of comment query clauses.
     * @return array
     */
    public static function exclude_order_comments($clauses)
    {
    }
    /**
     * Exclude order comments from feed.
     *
     * @deprecated 3.1
     * @param mixed $join Deprecated.
     */
    public static function exclude_order_comments_from_feed_join($join)
    {
    }
    /**
     * Exclude order comments from queries and RSS.
     *
     * @param  string $where The WHERE clause of the query.
     * @return string
     */
    public static function exclude_order_comments_from_feed_where($where)
    {
    }
    /**
     * Exclude webhook comments from queries and RSS.
     *
     * @since  2.2
     * @param  array $clauses A compacted array of comment query clauses.
     * @return array
     */
    public static function exclude_webhook_comments($clauses)
    {
    }
    /**
     * Exclude webhooks comments from feed.
     *
     * @deprecated 3.1
     * @param mixed $join Deprecated.
     */
    public static function exclude_webhook_comments_from_feed_join($join)
    {
    }
    /**
     * Exclude webhook comments from queries and RSS.
     *
     * @since  2.1
     * @param  string $where The WHERE clause of the query.
     * @return string
     */
    public static function exclude_webhook_comments_from_feed_where($where)
    {
    }
    /**
     * Validate the comment ratings.
     *
     * @param  array $comment_data Comment data.
     * @return array
     */
    public static function check_comment_rating($comment_data)
    {
    }
    /**
     * Rating field for comments.
     *
     * @param int $comment_id Comment ID.
     */
    public static function add_comment_rating($comment_id)
    {
    }
    /**
     * Modify recipient of review email.
     *
     * @param array $emails     Emails.
     * @param int   $comment_id Comment ID.
     * @return array
     */
    public static function comment_moderation_recipients($emails, $comment_id)
    {
    }
    /**
     * Ensure product average rating and review count is kept up to date.
     *
     * @param int $post_id Post ID.
     */
    public static function clear_transients($post_id)
    {
    }
    /**
     * Delete comments count cache whenever there is
     * new comment or the status of a comment changes. Cache
     * will be regenerated next time WC_Comments::wp_count_comments()
     * is called.
     */
    public static function delete_comments_count_cache()
    {
    }
    /**
     * Remove order notes, webhook delivery logs, and product reviews from wp_count_comments().
     *
     * @since  2.2
     * @param  object $stats   Comment stats.
     * @param  int    $post_id Post ID.
     * @return object
     */
    public static function wp_count_comments($stats, $post_id)
    {
    }
    /**
     * Make sure WP displays avatars for comments with the `review` type.
     *
     * @since  2.3
     * @param  array $comment_types Comment types.
     * @return array
     */
    public static function add_avatar_for_review_comment_type($comment_types)
    {
    }
    /**
     * Add Product Reviews filter for `review` comment type.
     *
     * @since 6.0.0
     *
     * @param array $comment_types Array of comment type labels keyed by their name.
     *
     * @return array
     */
    public static function add_review_comment_filter(array $comment_types) : array
    {
    }
    /**
     * Determine if a review is from a verified owner at submission.
     *
     * @param int $comment_id Comment ID.
     * @return bool
     */
    public static function add_comment_purchase_verification($comment_id)
    {
    }
    /**
     * Get product rating for a product. Please note this is not cached.
     *
     * @since 3.0.0
     * @param WC_Product $product Product instance.
     * @return float
     */
    public static function get_average_rating_for_product(&$product)
    {
    }
    /**
     * Utility function for getting review counts for multiple products in one query. This is not cached.
     *
     * @since 5.0.0
     *
     * @param array $product_ids Array of product IDs.
     *
     * @return array
     */
    public static function get_review_counts_for_product_ids($product_ids)
    {
    }
    /**
     * Get product review count for a product (not replies). Please note this is not cached.
     *
     * @since 3.0.0
     * @param WC_Product $product Product instance.
     * @return int
     */
    public static function get_review_count_for_product(&$product)
    {
    }
    /**
     * Get product rating count for a product. Please note this is not cached.
     *
     * @since 3.0.0
     * @param WC_Product $product Product instance.
     * @return int[]
     */
    public static function get_rating_counts_for_product(&$product)
    {
    }
    /**
     * Update comment type of product reviews.
     *
     * @since 3.5.0
     * @param array $comment_data Comment data.
     * @return array
     */
    public static function update_comment_type($comment_data)
    {
    }
    /**
     * Validate product reviews if requires a verified owner.
     *
     * @param int $comment_post_id Post ID.
     */
    public static function validate_product_review_verified_owners($comment_post_id)
    {
    }
}