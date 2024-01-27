<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsStatsFormat
{
    /**
     * @param int|null $clicks Clicks number
     * @param int|null $link_external_clicks External clicks number
     * @param string|null $day Day as YYYY-MM-DD
     * @param int|null $impressions Impressions number
     * @param int|null $join_rate Events number
     * @param string|null $month Month as YYYY-MM
     * @param int|null $year Year as YYYY
     * @param int|null $overall 1 if period=overall
     * @param int|null $reach Reach 
     * @param string|null $spent Spent funds
     * @param int|null $video_plays_unique_started Video plays unique started count
     * @param int|null $video_plays_unique_3_seconds Video plays unique 3 seconds count
     * @param int|null $video_plays_unique_10_seconds Video plays unique 10 seconds count
     * @param int|null $video_plays_unique_25_percents Video plays unique 25 percents count
     * @param int|null $video_plays_unique_50_percents Video plays unique 50 percents count
     * @param int|null $video_plays_unique_75_percents Video plays unique 75 percents count
     * @param int|null $video_plays_unique_100_percents Video plays unique 100 percents count
     * @param string|null $effective_cost_per_click Effective cost per click
     * @param string|null $effective_cost_per_mille Effective cost per mille
     * @param string|null $effective_cpf Effective cpf
     * @param string|null $effective_cost_per_message Effective cost per message
     * @param int|null $message_sends Message sends count
     * @param int|null $message_sends_by_any_user Message sends by anu user
     * @param int|null $conversions_external Conversions external
     * @param int|null $conversion_count Conversions count
     * @param string|null $conversion_cr Conversions CR
     * @param string|null $day_from Day from
     * @param string|null $day_to Day to
     * @param string|null $ctr Ctr
     * @param int|null $uniq_views_count Unique views count
     * @param array|null $mobile_app_stat Mobile app stat
     */
    public function __construct(
        public ?int $clicks = NULL,
        public ?int $link_external_clicks = NULL,
        public ?string $day = NULL,
        public ?int $impressions = NULL,
        public ?int $join_rate = NULL,
        public ?string $month = NULL,
        public ?int $year = NULL,
        public ?int $overall = NULL,
        public ?int $reach = NULL,
        public ?string $spent = NULL,
        public ?int $video_plays_unique_started = NULL,
        public ?int $video_plays_unique_3_seconds = NULL,
        public ?int $video_plays_unique_10_seconds = NULL,
        public ?int $video_plays_unique_25_percents = NULL,
        public ?int $video_plays_unique_50_percents = NULL,
        public ?int $video_plays_unique_75_percents = NULL,
        public ?int $video_plays_unique_100_percents = NULL,
        public ?string $effective_cost_per_click = NULL,
        public ?string $effective_cost_per_mille = NULL,
        public ?string $effective_cpf = NULL,
        public ?string $effective_cost_per_message = NULL,
        public ?int $message_sends = NULL,
        public ?int $message_sends_by_any_user = NULL,
        public ?int $conversions_external = NULL,
        public ?int $conversion_count = NULL,
        public ?string $conversion_cr = NULL,
        public ?string $day_from = NULL,
        public ?string $day_to = NULL,
        public ?string $ctr = NULL,
        public ?int $uniq_views_count = NULL,
        public ?array $mobile_app_stat = NULL
    ) {}
}