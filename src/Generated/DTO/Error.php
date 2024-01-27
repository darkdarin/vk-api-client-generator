<?php

namespace App\Api\Generated\DTO;

readonly class Error
{
    /**
     * @param list<SubCodeRef> $subcodes
     */
    public function __construct(
        public int $code,
        public string $description,
        public ?array $subcodes = null,
        public bool $global = false,
        public bool $disabled = false,
    ) {
    }
}
