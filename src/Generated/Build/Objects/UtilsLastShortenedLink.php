<?php

namespace App\Api\Generated\Build\Objects;

readonly class UtilsLastShortenedLink
{
    /**
     * @param string|null $access_key Access key for private stats
     * @param string|null $key Link key (characters after vk.cc/)
     * @param string|null $short_url Short link URL
     * @param int|null $timestamp Creation time in Unixtime
     * @param string|null $url Full URL
     * @param int|null $views Total views number
     */
    public function __construct(
        public ?string $access_key = NULL,
        public ?string $key = NULL,
        public ?string $short_url = NULL,
        public ?int $timestamp = NULL,
        public ?string $url = NULL,
        public ?int $views = NULL
    ) {}
}