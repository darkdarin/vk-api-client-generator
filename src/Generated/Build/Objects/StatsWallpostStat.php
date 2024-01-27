<?php

namespace App\Api\Generated\Build\Objects;

readonly class StatsWallpostStat
{
    /**
     * @param int|null $post_id
     * @param int|null $hide Hidings number
     * @param int|null $join_group People have joined the group
     * @param int|null $links Link clickthrough
     * @param int|null $reach_subscribers Subscribers reach
     * @param int|null $reach_subscribers_count
     * @param int|null $reach_total Total reach
     * @param int|null $reach_total_count
     * @param int|null $reach_viral
     * @param int|null $reach_ads
     * @param int|null $report Reports number
     * @param int|null $to_group Clickthrough to community
     * @param int|null $unsubscribe Unsubscribed members
     * @param array|null $sex_age
     */
    public function __construct(
        public ?int $post_id = NULL,
        public ?int $hide = NULL,
        public ?int $join_group = NULL,
        public ?int $links = NULL,
        public ?int $reach_subscribers = NULL,
        public ?int $reach_subscribers_count = NULL,
        public ?int $reach_total = NULL,
        public ?int $reach_total_count = NULL,
        public ?int $reach_viral = NULL,
        public ?int $reach_ads = NULL,
        public ?int $report = NULL,
        public ?int $to_group = NULL,
        public ?int $unsubscribe = NULL,
        public ?array $sex_age = NULL
    ) {}
}