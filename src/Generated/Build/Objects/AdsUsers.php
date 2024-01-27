<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsUsers
{
    /**
     * @param array $accesses
     * @param int $user_id User ID
     */
    public function __construct(public array $accesses, public int $user_id)
    {}
}