<?php

namespace Automattic\WooCommerce\Internal\Admin\Marketing;

/**
 * Marketing Specifications Class.
 *
 * @internal
 * @since x.x.x
 */
class MarketingSpecs
{
    /**
     * Name of knowledge base post transient.
     *
     * @var string
     */
    public const KNOWLEDGE_BASE_TRANSIENT = 'wc_marketing_knowledge_base';
    /**
     * Load knowledge base posts from WooCommerce.com
     *
     * @param string|null $topic The topic of marketing knowledgebase to retrieve.
     * @return array
     */
    public function get_knowledge_base_posts(?string $topic): array
    {
    }
}
