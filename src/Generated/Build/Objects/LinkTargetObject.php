<?php

namespace App\Api\Generated\Build\Objects;

readonly class LinkTargetObject
{
    /**
     * @param string|null $type Object type
     * @param int|null $owner_id Owner ID
     * @param int|null $item_id Item ID
     */
    public function __construct(
        public ?string $type = NULL,
        public ?int $owner_id = NULL,
        public ?int $item_id = NULL
    ) {}
}