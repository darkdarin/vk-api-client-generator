<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsClient
{
    /**
     * @param string $all_limit Client's total limit, rubles
     * @param string $day_limit Client's day limit, rubles
     * @param int $id Client ID
     * @param string $name Client name
     * @param mixed $ord_data Ord data
     */
    public function __construct(
        public string $all_limit,
        public string $day_limit,
        public int $id,
        public string $name,
        public mixed $ord_data = NULL
    ) {}
}