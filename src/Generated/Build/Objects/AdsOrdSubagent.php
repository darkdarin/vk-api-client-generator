<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsOrdSubagent
{
    /**
     * @param mixed $type
     * @param string $name
     * @param string $phone
     * @param string|null $inn
     */
    public function __construct(
        public mixed $type,
        public string $name,
        public string $phone,
        public ?string $inn = NULL
    ) {}
}