<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsPromotedPostReach
{
    /**
     * @param int $hide Hides amount
     * @param int $id Object ID from 'ids' parameter
     * @param int $join_group Community joins
     * @param int $links Link clicks
     * @param int $reach_subscribers Subscribers reach
     * @param int $reach_total Total reach
     * @param int $report Reports amount
     * @param int $to_group Community clicks
     * @param int $unsubscribe 'Unsubscribe' events amount
     * @param int|null $video_views_100p Video views for 100 percent
     * @param int|null $video_views_25p Video views for 25 percent
     * @param int|null $video_views_3s Video views for 3 seconds
     * @param int|null $video_views_10s Video views for 10 seconds
     * @param int|null $video_views_50p Video views for 50 percent
     * @param int|null $video_views_75p Video views for 75 percent
     * @param int|null $video_views_start Video starts
     * @param int|null $pretty_cards_clicks Pretty cards clicks
     */
    public function __construct(
        public int $hide,
        public int $id,
        public int $join_group,
        public int $links,
        public int $reach_subscribers,
        public int $reach_total,
        public int $report,
        public int $to_group,
        public int $unsubscribe,
        public ?int $video_views_100p = NULL,
        public ?int $video_views_25p = NULL,
        public ?int $video_views_3s = NULL,
        public ?int $video_views_10s = NULL,
        public ?int $video_views_50p = NULL,
        public ?int $video_views_75p = NULL,
        public ?int $video_views_start = NULL,
        public ?int $pretty_cards_clicks = NULL
    ) {}
}