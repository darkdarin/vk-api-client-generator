<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsTargSuggestions
{
    /**
     * @param int|null $id Object ID
     * @param string|null $name Object name
     * @param string|null $type Object type
     * @param string|null $parent Parent
     */
    public function __construct(
        public ?int $id = NULL,
        public ?string $name = NULL,
        public ?string $type = NULL,
        public ?string $parent = NULL
    ) {}
}