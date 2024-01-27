<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsCreateAdStatus
{
    /**
     * @param int $id Ad ID
     * @param int|null $post_id Stealth Post ID
     * @param int|null $error_code Error code
     * @param string|null $error_desc Error description
     */
    public function __construct(
        public int $id,
        public ?int $post_id = NULL,
        public ?int $error_code = NULL,
        public ?string $error_desc = NULL
    ) {}
}