<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsMemberRole
{
    /**
     * @param int $id User ID
     * @param bool|null $is_call_operator Allow the manager to accept community calls.
     * @param array|null $permissions
     * @param mixed $role
     */
    public function __construct(
        public int $id,
        public ?bool $is_call_operator = NULL,
        public ?array $permissions = NULL,
        public mixed $role = NULL
    ) {}
}