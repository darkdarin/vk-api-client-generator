<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsContactsItem
{
    /**
     * @param int|null $user_id User ID
     * @param string|null $desc Contact description
     * @param string|null $phone Contact phone
     * @param string|null $email Contact email
     */
    public function __construct(
        public ?int $user_id = NULL,
        public ?string $desc = NULL,
        public ?string $phone = NULL,
        public ?string $email = NULL
    ) {}
}