<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsAccesses
{
    /**
     * @param string|null $client_id Client ID
     * @param mixed $role
     */
    public function __construct(public ?string $client_id = NULL, public mixed $role = NULL)
    {}
}