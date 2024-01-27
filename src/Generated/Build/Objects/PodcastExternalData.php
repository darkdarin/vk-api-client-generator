<?php

namespace App\Api\Generated\Build\Objects;

readonly class PodcastExternalData
{
    /**
     * @param string|null $url Url of the podcast page
     * @param string|null $owner_url Url of the podcasts owner community
     * @param string|null $title Podcast title
     * @param string|null $owner_name Name of the podcasts owner community
     * @param mixed $cover Podcast cover
     */
    public function __construct(
        public ?string $url = NULL,
        public ?string $owner_url = NULL,
        public ?string $title = NULL,
        public ?string $owner_name = NULL,
        public mixed $cover = NULL
    ) {}
}