<?php

namespace App\Api\Generated\Build\Objects;

readonly class DatabaseRegion
{
    /**
     * @param int|null $id Region ID
     * @param string|null $title Region title
     */
    public function __construct(public ?int $id = NULL, public ?string $title = NULL)
    {}
}