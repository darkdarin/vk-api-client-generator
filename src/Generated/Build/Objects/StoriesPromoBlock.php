<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Additional data for promo stories
 */
readonly class StoriesPromoBlock
{
    /**
     * @param string $name Promo story title
     * @param string $photo_50 RL of square photo of the story with 50 pixels in width
     * @param string $photo_100 RL of square photo of the story with 100 pixels in width
     * @param bool $not_animated Hide animation for promo story
     * @param bool $is_advice Promo story from advice
     */
    public function __construct(
        public string $name,
        public string $photo_50,
        public string $photo_100,
        public bool $not_animated,
        public bool $is_advice
    ) {}
}