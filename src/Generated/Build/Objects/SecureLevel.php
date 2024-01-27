<?php

namespace App\Api\Generated\Build\Objects;

readonly class SecureLevel
{
    /**
     * @param int|null $level Level
     * @param int|null $uid User ID
     */
    public function __construct(public ?int $level = NULL, public ?int $uid = NULL)
    {}
}