<?php

namespace App\Api\Generated\Build\Objects;

readonly class StoriesStoryLink
{
    /**
     * @param string $text Link text
     * @param string $url Link URL
     * @param string|null $link_url_target How to open url
     */
    public function __construct(
        public string $text,
        public string $url,
        public ?string $link_url_target = NULL
    ) {}
}