<?php

namespace App\Api\Generated\Build\Objects;

readonly class FaveTag
{
    /**
     * @param int|null $id Tag id
     * @param string|null $name Tag name
     */
    public function __construct(public ?int $id = NULL, public ?string $name = NULL)
    {}
}