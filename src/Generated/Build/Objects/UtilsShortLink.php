<?php

namespace App\Api\Generated\Build\Objects;

readonly class UtilsShortLink
{
    /**
     * @param string|null $access_key Access key for private stats
     * @param string|null $key Link key (characters after vk.cc/)
     * @param string|null $short_url Short link URL
     * @param string|null $url Full URL
     */
    public function __construct(
        public ?string $access_key = NULL,
        public ?string $key = NULL,
        public ?string $short_url = NULL,
        public ?string $url = NULL
    ) {}
}