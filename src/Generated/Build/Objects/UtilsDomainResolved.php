<?php

namespace App\Api\Generated\Build\Objects;

readonly class UtilsDomainResolved
{
    /**
     * @param int|null $object_id Object ID
     * @param int|null $group_id Group ID
     * @param mixed $type
     */
    public function __construct(
        public ?int $object_id = NULL,
        public ?int $group_id = NULL,
        public mixed $type = NULL
    ) {}
}