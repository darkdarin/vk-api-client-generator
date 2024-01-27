<?php

namespace App\Api\Generated\Build\Objects;

readonly class StoriesStatLine
{
    /**
     * @param string $name
     * @param int|null $counter
     * @param bool|null $is_unavailable
     */
    public function __construct(
        public string $name,
        public ?int $counter = NULL,
        public ?bool $is_unavailable = NULL
    ) {}
}