<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsTargetGroupTargetPixelRule
{
    /**
     * @param string|null $url_full_match
     * @param string|null $event_full_match
     * @param list<string>|null $url_substrings_match
     * @param list<string>|null $event_substrings_match
     * @param string|null $url_regex_match
     * @param string|null $event_regex_match
     */
    public function __construct(
        public ?string $url_full_match = NULL,
        public ?string $event_full_match = NULL,
        public ?array $url_substrings_match = NULL,
        public ?array $event_substrings_match = NULL,
        public ?string $url_regex_match = NULL,
        public ?string $event_regex_match = NULL
    ) {}
}