<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseObjectWithName
{
    /**
     * @param int $id Object ID
     * @param string $name Object name
     */
    public function __construct(public int $id, public string $name)
    {}
}