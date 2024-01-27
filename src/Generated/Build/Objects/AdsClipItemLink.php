<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Link
 */
readonly class AdsClipItemLink
{
    /**
     * @param string|null $text Text
     * @param string|null $key Key
     * @param string|null $url Url
     */
    public function __construct(
        public ?string $text = NULL,
        public ?string $key = NULL,
        public ?string $url = NULL
    ) {}
}