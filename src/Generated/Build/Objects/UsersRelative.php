<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\UsersRelative\Type;

readonly class UsersRelative
{
    /**
     * @param Type $type Relative type
     * @param string|null $birth_date Date of child birthday (format dd.mm.yyyy)
     * @param int|null $id Relative ID
     * @param string|null $name Name of relative
     */
    public function __construct(
        public Type $type,
        public ?string $birth_date = NULL,
        public ?int $id = NULL,
        public ?string $name = NULL
    ) {}
}