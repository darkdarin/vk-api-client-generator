<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsTargStats
{
    /**
     * @param int $audience_count Audience
     * @param string|null $recommended_cpc Recommended CPC value for 50% reach (old format)
     * @param string|null $recommended_cpm Recommended CPM value for 50% reach (old format)
     * @param string|null $recommended_cpc_50 Recommended CPC value for 50% reach
     * @param string|null $recommended_cpm_50 Recommended CPM value for 50% reach
     * @param string|null $recommended_cpc_70 Recommended CPC value for 70% reach
     * @param string|null $recommended_cpm_70 Recommended CPM value for 70% reach
     * @param string|null $recommended_cpc_90 Recommended CPC value for 90% reach
     * @param string|null $recommended_cpm_90 Recommended CPM value for 90% reach
     * @param int|null $total_alive_audience Total alive audience
     */
    public function __construct(
        public int $audience_count,
        public ?string $recommended_cpc = NULL,
        public ?string $recommended_cpm = NULL,
        public ?string $recommended_cpc_50 = NULL,
        public ?string $recommended_cpm_50 = NULL,
        public ?string $recommended_cpc_70 = NULL,
        public ?string $recommended_cpm_70 = NULL,
        public ?string $recommended_cpc_90 = NULL,
        public ?string $recommended_cpm_90 = NULL,
        public ?int $total_alive_audience = NULL
    ) {}
}