<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsStories
{
    /**
     * @param array|null $stories
     * @param mixed $owner
     * @param string|null $stories_disclaimers_text Stories disclaimers text
     */
    public function __construct(
        public ?array $stories = NULL,
        public mixed $owner = NULL,
        public ?string $stories_disclaimers_text = NULL
    ) {}
}