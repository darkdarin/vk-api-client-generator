<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsTargSuggestionsSchools
{
    /**
     * @param string|null $desc Full school title
     * @param int|null $id School ID
     * @param string|null $name School title
     * @param string|null $parent City name
     * @param mixed $type
     */
    public function __construct(
        public ?string $desc = NULL,
        public ?int $id = NULL,
        public ?string $name = NULL,
        public ?string $parent = NULL,
        public mixed $type = NULL
    ) {}
}