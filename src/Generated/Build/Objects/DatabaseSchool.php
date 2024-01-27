<?php

namespace App\Api\Generated\Build\Objects;

readonly class DatabaseSchool
{
    /**
     * @param int|null $id School ID
     * @param string|null $title School title
     */
    public function __construct(public ?int $id = NULL, public ?string $title = NULL)
    {}
}