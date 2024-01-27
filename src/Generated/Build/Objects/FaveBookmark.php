<?php

namespace App\Api\Generated\Build\Objects;

readonly class FaveBookmark
{
    /**
     * @param int $added_date Timestamp, when this item was bookmarked
     * @param bool $seen Has user seen this item
     * @param array $tags
     * @param mixed $type Item type
     * @param mixed $link
     * @param mixed $post
     * @param mixed $product
     * @param mixed $video
     */
    public function __construct(
        public int $added_date,
        public bool $seen,
        public array $tags,
        public mixed $type,
        public mixed $link = NULL,
        public mixed $post = NULL,
        public mixed $product = NULL,
        public mixed $video = NULL
    ) {}
}