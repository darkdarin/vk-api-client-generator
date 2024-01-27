<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdswebGetSitesResponseSitesSite
{
    /**
     * @param int $id
     * @param string|null $status_user
     * @param string|null $status_moder
     * @param string|null $domains
     */
    public function __construct(
        public int $id,
        public ?string $status_user = NULL,
        public ?string $status_moder = NULL,
        public ?string $domains = NULL
    ) {}
}