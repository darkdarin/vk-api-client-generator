<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseCity
{
    /**
     * @param int $id City ID
     * @param string $title City title
     */
    public function __construct(public int $id, public string $title)
    {}
}