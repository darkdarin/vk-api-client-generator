<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Activity stats
 */
readonly class StatsActivity
{
    /**
     * @param int|null $comments Comments number
     * @param int|null $copies Reposts number
     * @param int|null $hidden Hidden from news count
     * @param int|null $likes Likes number
     * @param int|null $subscribed New subscribers count
     * @param int|null $unsubscribed Unsubscribed count
     */
    public function __construct(
        public ?int $comments = NULL,
        public ?int $copies = NULL,
        public ?int $hidden = NULL,
        public ?int $likes = NULL,
        public ?int $subscribed = NULL,
        public ?int $unsubscribed = NULL
    ) {}
}