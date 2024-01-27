<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\OwnerState\State;

readonly class OwnerState
{
    /**
     * @param State|null $state
     * @param string|null $description wiki text to describe user state
     */
    public function __construct(public ?State $state = NULL, public ?string $description = NULL)
    {}
}