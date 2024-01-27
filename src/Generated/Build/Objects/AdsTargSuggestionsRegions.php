<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsTargSuggestionsRegions
{
    /**
     * @param int|null $id Object ID
     * @param string|null $name Object name
     * @param string|null $type Object type
     */
    public function __construct(
        public ?int $id = NULL,
        public ?string $name = NULL,
        public ?string $type = NULL
    ) {}
}