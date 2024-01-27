<?php

namespace App\Api\Generated\Build\Objects;

readonly class StoriesStoryStats
{
    /**
     * @param mixed $answer
     * @param mixed $bans
     * @param mixed $open_link
     * @param mixed $replies
     * @param mixed $shares
     * @param mixed $subscribers
     * @param mixed $views
     * @param mixed $likes
     */
    public function __construct(
        public mixed $answer,
        public mixed $bans,
        public mixed $open_link,
        public mixed $replies,
        public mixed $shares,
        public mixed $subscribers,
        public mixed $views,
        public mixed $likes
    ) {}
}