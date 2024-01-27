<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Reposts
 */
readonly class AdsPostReposts
{
    /**
     * @param int|null $count Count
     * @param int|null $wall_count Wall count
     * @param int|null $mail_count Mail count
     */
    public function __construct(
        public ?int $count = NULL,
        public ?int $wall_count = NULL,
        public ?int $mail_count = NULL
    ) {}
}