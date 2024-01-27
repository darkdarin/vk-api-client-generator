<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Likes
 */
readonly class AdsPostLikes
{
    /**
     * @param int|null $can_like Can like
     * @param int|null $count Count
     * @param int|null $user_likes User likes
     */
    public function __construct(
        public ?int $can_like = NULL,
        public ?int $count = NULL,
        public ?int $user_likes = NULL
    ) {}
}