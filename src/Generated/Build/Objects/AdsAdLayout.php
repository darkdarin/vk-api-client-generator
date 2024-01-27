<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsAdLayout
{
    /**
     * @param int $ad_format Ad format
     * @param int $campaign_id Campaign ID
     * @param mixed $cost_type
     * @param string $description Ad description
     * @param int $id Ad ID
     * @param string $image_src Image URL
     * @param string $link_url URL of advertised object
     * @param int $link_type Type of advertised object
     * @param string $title Ad title
     * @param string|null $image_src_2x URL of the preview image in double size
     * @param string|null $link_domain Domain of advertised object
     * @param string|null $preview_link link to preview an ad as it is shown on the website
     * @param mixed $video Information whether the ad is a video
     * @param bool|null $social Social
     * @param string|null $okved Okved
     * @param int|null $age_restriction Age restriction
     * @param int|null $goal_type Goal type
     * @param string|null $link_title Link title
     * @param string|null $link_button Link button
     * @param int|null $repeat_video Repeat video
     * @param string|null $video_src_240 Video source 240p
     * @param string|null $video_src_360 Video source 360p
     * @param string|null $video_src_480 Video source 480p
     * @param string|null $video_src_720 Video source 720p
     * @param string|null $video_src_1080 Video source 1080p
     * @param string|null $video_image_src Video image source
     * @param string|null $video_image_src_2x Video image source 2x
     * @param int|null $video_duration Video duration
     * @param string|null $icon_src Icon source
     * @param string|null $icon_src_2x Icon source 2x
     * @param mixed $post
     * @param mixed $stories_data
     * @param array|null $clips_list
     */
    public function __construct(
        public int $ad_format,
        public int $campaign_id,
        public mixed $cost_type,
        public string $description,
        public int $id,
        public string $image_src,
        public string $link_url,
        public int $link_type,
        public string $title,
        public ?string $image_src_2x = NULL,
        public ?string $link_domain = NULL,
        public ?string $preview_link = NULL,
        public mixed $video = NULL,
        public ?bool $social = NULL,
        public ?string $okved = NULL,
        public ?int $age_restriction = NULL,
        public ?int $goal_type = NULL,
        public ?string $link_title = NULL,
        public ?string $link_button = NULL,
        public ?int $repeat_video = NULL,
        public ?string $video_src_240 = NULL,
        public ?string $video_src_360 = NULL,
        public ?string $video_src_480 = NULL,
        public ?string $video_src_720 = NULL,
        public ?string $video_src_1080 = NULL,
        public ?string $video_image_src = NULL,
        public ?string $video_image_src_2x = NULL,
        public ?int $video_duration = NULL,
        public ?string $icon_src = NULL,
        public ?string $icon_src_2x = NULL,
        public mixed $post = NULL,
        public mixed $stories_data = NULL,
        public ?array $clips_list = NULL
    ) {}
}