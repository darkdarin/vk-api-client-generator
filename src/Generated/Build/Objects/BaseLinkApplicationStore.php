<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseLinkApplicationStore
{
    /**
     * @param float|null $id Store Id
     * @param string|null $name Store name
     */
    public function __construct(public ?float $id = NULL, public ?string $name = NULL)
    {}
}