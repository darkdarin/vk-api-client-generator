<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsStats
{
    /**
     * @param int|null $id Object ID
     * @param array|null $stats
     * @param mixed $type
     * @param mixed $views_times
     */
    public function __construct(
        public ?int $id = NULL,
        public ?array $stats = NULL,
        public mixed $type = NULL,
        public mixed $views_times = NULL
    ) {}
}