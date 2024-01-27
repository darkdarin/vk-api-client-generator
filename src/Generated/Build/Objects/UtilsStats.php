<?php

namespace App\Api\Generated\Build\Objects;

readonly class UtilsStats
{
    /**
     * @param int|null $timestamp Start time
     * @param int|null $views Total views number
     */
    public function __construct(public ?int $timestamp = NULL, public ?int $views = NULL)
    {}
}