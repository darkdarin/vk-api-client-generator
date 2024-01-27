<?php

namespace App\Api\Generated\Build\Objects;

readonly class UtilsStatsSexAge
{
    /**
     * @param string|null $age_range Age denotation
     * @param int|null $female  Views by female users
     * @param int|null $male  Views by male users
     */
    public function __construct(
        public ?string $age_range = NULL,
        public ?int $female = NULL,
        public ?int $male = NULL
    ) {}
}