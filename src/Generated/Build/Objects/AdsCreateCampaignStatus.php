<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsCreateCampaignStatus
{
    /**
     * @param int $id Campaign ID
     * @param int|null $error_code Error code
     * @param string|null $error_desc Error description
     */
    public function __construct(
        public int $id,
        public ?int $error_code = NULL,
        public ?string $error_desc = NULL
    ) {}
}