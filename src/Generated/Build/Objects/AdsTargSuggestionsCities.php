<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsTargSuggestionsCities
{
    /**
     * @param int|null $id Object ID
     * @param string|null $name Object name
     * @param string|null $parent Parent object
     */
    public function __construct(
        public ?int $id = NULL,
        public ?string $name = NULL,
        public ?string $parent = NULL
    ) {}
}