<?php

namespace App\Api\Generated\Build\Objects;

readonly class StorageValue
{
    /**
     * @param string $key
     * @param string $value
     */
    public function __construct(public string $key, public string $value)
    {}
}