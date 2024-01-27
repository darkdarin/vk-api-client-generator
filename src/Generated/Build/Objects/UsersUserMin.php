<?php

namespace App\Api\Generated\Build\Objects;

readonly class UsersUserMin
{
    /**
     * @param int $id User ID
     * @param string|null $deactivated Returns if a profile is deleted or blocked
     * @param string|null $first_name User first name
     * @param int|null $hidden Returns if a profile is hidden.
     * @param string|null $last_name User last name
     * @param bool|null $can_access_closed
     * @param bool|null $is_closed
     */
    public function __construct(
        public int $id,
        public ?string $deactivated = NULL,
        public ?string $first_name = NULL,
        public ?int $hidden = NULL,
        public ?string $last_name = NULL,
        public ?bool $can_access_closed = NULL,
        public ?bool $is_closed = NULL
    ) {}
}