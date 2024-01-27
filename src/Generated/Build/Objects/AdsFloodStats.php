<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsFloodStats
{
    /**
     * @param int $left Requests left
     * @param int $refresh Time to refresh in seconds
     * @param array|null $stats_by_user Used requests per user
     */
    public function __construct(public int $left, public int $refresh, public ?array $stats_by_user = NULL)
    {}
}