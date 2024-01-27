<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsLinkStatus
{
    /**
     * @param string $status Link status
     * @param string|null $description Reject reason
     * @param string|null $redirect_url URL
     */
    public function __construct(
        public string $status,
        public ?string $description = NULL,
        public ?string $redirect_url = NULL
    ) {}
}