<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdswebGetFraudHistoryResponseEntriesEntry
{
    /**
     * @param int $site_id
     * @param string $day
     */
    public function __construct(public int $site_id, public string $day)
    {}
}