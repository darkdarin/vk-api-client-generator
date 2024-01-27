<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Count of views
 */
readonly class BaseRepostsInfo
{
    /**
     * @param int $count Total reposts counter. Sum of wall and mail reposts counters
     * @param int|null $wall_count Wall reposts counter
     * @param int|null $mail_count Mail reposts counter
     * @param mixed $user_reposted Information whether current user has reposted the post
     */
    public function __construct(
        public int $count,
        public ?int $wall_count = NULL,
        public ?int $mail_count = NULL,
        public mixed $user_reposted = NULL
    ) {}
}