<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsFloodStatsByUserItem
{
    /**
     * @param int $user_id User ID
     * @param int $requests_count Used requests
     */
    public function __construct(public int $user_id, public int $requests_count)
    {}
}