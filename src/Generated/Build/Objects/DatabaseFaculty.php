<?php

namespace App\Api\Generated\Build\Objects;

readonly class DatabaseFaculty
{
    /**
     * @param int|null $id Faculty ID
     * @param string|null $title Faculty title
     */
    public function __construct(public ?int $id = NULL, public ?string $title = NULL)
    {}
}