<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseCountry
{
    /**
     * @param int $id Country ID
     * @param string $title Country title
     */
    public function __construct(public int $id, public string $title)
    {}
}