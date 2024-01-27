<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseRequestParam
{
    /**
     * @param string $key Parameter name
     * @param string $value Parameter value
     */
    public function __construct(public string $key, public string $value)
    {}
}