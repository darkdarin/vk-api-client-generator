<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsCountersGroup
{
    /**
     * @param int|null $addresses Addresses number
     * @param int|null $albums Photo albums number
     * @param int|null $audios Audios number
     * @param int|null $audio_playlists Audio playlists number
     * @param int|null $docs Docs number
     * @param int|null $market Market items number
     * @param int|null $photos Photos number
     * @param int|null $topics Topics number
     * @param int|null $videos Videos number
     * @param int|null $video_playlists Playlists number
     * @param int|null $market_services Market services number
     * @param int|null $podcasts Podcasts number
     * @param int|null $articles Articles number
     * @param int|null $narratives Narratives number
     * @param int|null $clips Clips number
     * @param int|null $clips_followers Clips followers number
     * @param int|null $videos_followers Videos followers number
     * @param int|null $clips_views Clips views number
     * @param int|null $clips_likes Clips likes number
     */
    public function __construct(
        public ?int $addresses = NULL,
        public ?int $albums = NULL,
        public ?int $audios = NULL,
        public ?int $audio_playlists = NULL,
        public ?int $docs = NULL,
        public ?int $market = NULL,
        public ?int $photos = NULL,
        public ?int $topics = NULL,
        public ?int $videos = NULL,
        public ?int $video_playlists = NULL,
        public ?int $market_services = NULL,
        public ?int $podcasts = NULL,
        public ?int $articles = NULL,
        public ?int $narratives = NULL,
        public ?int $clips = NULL,
        public ?int $clips_followers = NULL,
        public ?int $videos_followers = NULL,
        public ?int $clips_views = NULL,
        public ?int $clips_likes = NULL
    ) {}
}