<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsCampaign
{
    /**
     * @param string $all_limit Campaign's total limit, rubles
     * @param string $day_limit Campaign's day limit, rubles
     * @param int $id Campaign ID
     * @param string $name Campaign title
     * @param int $start_time Campaign start time, as Unixtime
     * @param mixed $status
     * @param int $stop_time Campaign stop time, as Unixtime
     * @param mixed $type
     * @param int|null $ads_count Amount of active ads in campaign
     * @param int|null $create_time Campaign create time, as Unixtime
     * @param int|null $goal_type Campaign goal type
     * @param int|null $user_goal_type Campaign user goal type
     * @param bool|null $is_cbo_enabled Shows if Campaign Budget Optimization is on
     * @param int|null $update_time Campaign update time, as Unixtime
     * @param int|null $views_limit Limit of views per user per campaign
     */
    public function __construct(
        public string $all_limit,
        public string $day_limit,
        public int $id,
        public string $name,
        public int $start_time,
        public mixed $status,
        public int $stop_time,
        public mixed $type,
        public ?int $ads_count = NULL,
        public ?int $create_time = NULL,
        public ?int $goal_type = NULL,
        public ?int $user_goal_type = NULL,
        public ?bool $is_cbo_enabled = NULL,
        public ?int $update_time = NULL,
        public ?int $views_limit = NULL
    ) {}
}