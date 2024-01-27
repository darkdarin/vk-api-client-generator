<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsStoryItemLink
{
    /**
     * @param string|null $key Key
     * @param string|null $text Text
     * @param string|null $url Url
     * @param string|null $raw_url Raw url
     */
    public function __construct(
        public ?string $key = NULL,
        public ?string $text = NULL,
        public ?string $url = NULL,
        public ?string $raw_url = NULL
    ) {}
}