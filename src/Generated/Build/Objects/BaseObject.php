<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseObject
{
    /**
     * @param int $id Object ID
     * @param string $title Object title
     */
    public function __construct(public int $id, public string $title)
    {}
}