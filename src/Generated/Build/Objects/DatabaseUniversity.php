<?php

namespace App\Api\Generated\Build\Objects;

readonly class DatabaseUniversity
{
    /**
     * @param int|null $id University ID
     * @param string|null $title University title
     */
    public function __construct(public ?int $id = NULL, public ?string $title = NULL)
    {}
}