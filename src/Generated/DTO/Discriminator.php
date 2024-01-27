<?php

namespace App\Api\Generated\DTO;

readonly class Discriminator
{
    /**
     * @param array<string, string> $mapping
     */
    public function __construct(
        public string $propertyName,
        public array $mapping,
    ) {
    }
}
