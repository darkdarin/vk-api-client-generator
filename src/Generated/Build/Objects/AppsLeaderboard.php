<?php

namespace App\Api\Generated\Build\Objects;

readonly class AppsLeaderboard
{
    /**
     * @param int $user_id User ID
     * @param int|null $level Level
     * @param int|null $points Points number
     * @param int|null $score Score number
     */
    public function __construct(
        public int $user_id,
        public ?int $level = NULL,
        public ?int $points = NULL,
        public ?int $score = NULL
    ) {}
}