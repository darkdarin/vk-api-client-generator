<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseLinkApplication
{
    /**
     * @param float|null $app_id Application Id
     * @param mixed $store
     */
    public function __construct(public ?float $app_id = NULL, public mixed $store = NULL)
    {}
}