<?php

namespace App\Api\Generated\Build\Objects;

readonly class BugtrackerCompanyMemberProduct
{
    /**
     * @param int $id
     * @param int $access
     * @param int $status
     * @param string|null $title
     * @param string|null $photo_url
     * @param string|null $licence_status_text
     */
    public function __construct(
        public int $id,
        public int $access,
        public int $status,
        public ?string $title = NULL,
        public ?string $photo_url = NULL,
        public ?string $licence_status_text = NULL
    ) {}
}