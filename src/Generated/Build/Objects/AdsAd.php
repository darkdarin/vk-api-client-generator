<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsAd
{
    /**
     * @param int $ad_format Ad format
     * @param int|string $ad_platform Ad platform
     * @param string $all_limit Total limit
     * @param mixed $approved
     * @param int $campaign_id Campaign ID
     * @param mixed $cost_type
     * @param int $id Ad ID
     * @param string $name Ad title
     * @param mixed $status
     * @param int|null $category1_id Category ID
     * @param int|null $category2_id Additional category ID
     * @param string|null $cpc Cost of a click, kopecks
     * @param string|null $cpm Cost of 1000 impressions, kopecks
     * @param string|null $cpa Cost of an action, kopecks
     * @param string|null $ocpm Cost of 1000 impressions optimized, kopecks
     * @param mixed $autobidding Autobidding
     * @param string|null $autobidding_max_cost Max cost of target actions for autobidding, kopecks
     * @param mixed $disclaimer_medical Information whether disclaimer is enabled
     * @param mixed $disclaimer_specialist Information whether disclaimer is enabled
     * @param mixed $disclaimer_supplements Information whether disclaimer is enabled
     * @param int|null $impressions_limit Impressions limit
     * @param int|null $impressions_limit_period Impressions limit period
     * @param mixed $impressions_limited Information whether impressions are limited
     * @param mixed $video Information whether the ad is a video
     * @param string|null $day_limit Day limit
     * @param int|null $goal_type Goal type
     * @param int|null $user_goal_type User goal type
     * @param int|null $age_restriction Age restriction
     * @param int|null $conversion_pixel_id Conversion pixel id
     * @param int|null $conversion_event_id Conversion event id
     * @param int|null $create_time Create time
     * @param int|null $update_time Update time
     * @param int|null $start_time Start time
     * @param int|null $stop_time Stop time
     * @param mixed $publisher_platforms_auto Publisher platform auto
     * @param string|null $publisher_platforms Publisher platforms
     * @param string|null $link_url Link url
     * @param int|null $link_owner_id Link owner id
     * @param int|null $link_id Link id
     * @param bool|null $has_campaign_budget_optimization Has campaign budget optimization
     * @param array|null $events_retargeting_groups Events retargeting groups
     * @param list<string>|null $weekly_schedule_hours Weekly schedule hours
     * @param int|null $weekly_schedule_use_holidays Weekly schedule use holidays
     * @param int|null $ad_platform_no_ad_network Ad platform no ad network
     * @param int|null $ad_platform_no_wall Ad platform no wall
     * @param int|null $disclaimer_finance Disclaimer finance
     * @param string|null $disclaimer_finance_name Disclaimer finance name
     * @param string|null $disclaimer_finance_license_no Disclaimer finance license no
     * @param bool|null $is_promo is promo
     * @param int|null $suggested_criteria Suggested criteria
     */
    public function __construct(
        public int $ad_format,
        public int|string $ad_platform,
        public string $all_limit,
        public mixed $approved,
        public int $campaign_id,
        public mixed $cost_type,
        public int $id,
        public string $name,
        public mixed $status,
        public ?int $category1_id = NULL,
        public ?int $category2_id = NULL,
        public ?string $cpc = NULL,
        public ?string $cpm = NULL,
        public ?string $cpa = NULL,
        public ?string $ocpm = NULL,
        public mixed $autobidding = NULL,
        public ?string $autobidding_max_cost = NULL,
        public mixed $disclaimer_medical = NULL,
        public mixed $disclaimer_specialist = NULL,
        public mixed $disclaimer_supplements = NULL,
        public ?int $impressions_limit = NULL,
        public ?int $impressions_limit_period = NULL,
        public mixed $impressions_limited = NULL,
        public mixed $video = NULL,
        public ?string $day_limit = NULL,
        public ?int $goal_type = NULL,
        public ?int $user_goal_type = NULL,
        public ?int $age_restriction = NULL,
        public ?int $conversion_pixel_id = NULL,
        public ?int $conversion_event_id = NULL,
        public ?int $create_time = NULL,
        public ?int $update_time = NULL,
        public ?int $start_time = NULL,
        public ?int $stop_time = NULL,
        public mixed $publisher_platforms_auto = NULL,
        public ?string $publisher_platforms = NULL,
        public ?string $link_url = NULL,
        public ?int $link_owner_id = NULL,
        public ?int $link_id = NULL,
        public ?bool $has_campaign_budget_optimization = NULL,
        public ?array $events_retargeting_groups = NULL,
        public ?array $weekly_schedule_hours = NULL,
        public ?int $weekly_schedule_use_holidays = NULL,
        public ?int $ad_platform_no_ad_network = NULL,
        public ?int $ad_platform_no_wall = NULL,
        public ?int $disclaimer_finance = NULL,
        public ?string $disclaimer_finance_name = NULL,
        public ?string $disclaimer_finance_license_no = NULL,
        public ?bool $is_promo = NULL,
        public ?int $suggested_criteria = NULL
    ) {}
}