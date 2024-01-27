<?php

namespace App\Api\Generated\Build\Objects;

readonly class UsersUserCounters
{
    /**
     * @param int|null $albums Albums number
     * @param int|null $badges Badges number
     * @param int|null $audios Audios number
     * @param int|null $followers Followers number
     * @param int|null $friends Friends number
     * @param int|null $gifts Gifts number
     * @param int|null $groups Communities number
     * @param int|null $notes Notes number
     * @param int|null $online_friends Online friends number
     * @param int|null $pages Public pages number
     * @param int|null $photos Photos number
     * @param int|null $subscriptions Subscriptions number
     * @param int|null $user_photos Number of photos with user
     * @param int|null $user_videos Number of videos with user
     * @param int|null $videos Videos number
     * @param int|null $video_playlists Playlists number
     * @param int|null $new_photo_tags
     * @param int|null $new_recognition_tags
     * @param int|null $mutual_friends
     * @param int|null $friends_followers
     * @param int|null $posts
     * @param int|null $articles
     * @param int|null $wishes
     * @param int|null $podcasts
     * @param int|null $clips
     * @param int|null $clips_followers
     * @param int|null $videos_followers Videos followers number
     * @param int|null $clips_views
     * @param int|null $clips_likes
     */
    public function __construct(
        public ?int $albums = NULL,
        public ?int $badges = NULL,
        public ?int $audios = NULL,
        public ?int $followers = NULL,
        public ?int $friends = NULL,
        public ?int $gifts = NULL,
        public ?int $groups = NULL,
        public ?int $notes = NULL,
        public ?int $online_friends = NULL,
        public ?int $pages = NULL,
        public ?int $photos = NULL,
        public ?int $subscriptions = NULL,
        public ?int $user_photos = NULL,
        public ?int $user_videos = NULL,
        public ?int $videos = NULL,
        public ?int $video_playlists = NULL,
        public ?int $new_photo_tags = NULL,
        public ?int $new_recognition_tags = NULL,
        public ?int $mutual_friends = NULL,
        public ?int $friends_followers = NULL,
        public ?int $posts = NULL,
        public ?int $articles = NULL,
        public ?int $wishes = NULL,
        public ?int $podcasts = NULL,
        public ?int $clips = NULL,
        public ?int $clips_followers = NULL,
        public ?int $videos_followers = NULL,
        public ?int $clips_views = NULL,
        public ?int $clips_likes = NULL
    ) {}
}