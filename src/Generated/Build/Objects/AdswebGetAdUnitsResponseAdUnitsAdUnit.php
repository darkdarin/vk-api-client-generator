<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdswebGetAdUnitsResponseAdUnitsAdUnit
{
    /**
     * @param int $id
     * @param int $site_id
     * @param string|null $name
     */
    public function __construct(public int $id, public int $site_id, public ?string $name = NULL)
    {}
}