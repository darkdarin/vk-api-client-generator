<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsGroup
{
    /**
     * @param int $id Community ID
     * @param string|null $name Community name
     * @param string|null $screen_name Domain of the community page
     * @param mixed $is_closed
     * @param mixed $type
     * @param mixed $is_admin Information whether current user is administrator
     * @param mixed $admin_level
     * @param mixed $is_member Information whether current user is member
     * @param mixed $is_advertiser Information whether current user is advertiser
     * @param int|null $start_date Start date in Unixtime format
     * @param int|null $finish_date Finish date in Unixtime format
     * @param mixed $verified Information whether community is verified
     * @param string|null $deactivated Information whether community is banned
     * @param string|null $photo_50 URL of square photo of the community with 50 pixels in width
     * @param string|null $photo_100 URL of square photo of the community with 100 pixels in width
     * @param string|null $photo_200 URL of square photo of the community with 200 pixels in width
     * @param string|null $photo_200_orig URL of square photo of the community with 200 pixels in width original
     * @param string|null $photo_400 URL of square photo of the community with 400 pixels in width
     * @param string|null $photo_400_orig URL of square photo of the community with 400 pixels in width original
     * @param string|null $photo_max URL of square photo of the community with max pixels in width
     * @param string|null $photo_max_orig URL of square photo of the community with max pixels in width original
     * @param string|null $est_date Established date
     * @param string|null $public_date_label Public date label
     * @param mixed $photo_max_size
     * @param mixed $is_video_live_notifications_blocked
     * @param mixed $video_live
     */
    public function __construct(
        public int $id,
        public ?string $name = NULL,
        public ?string $screen_name = NULL,
        public mixed $is_closed = NULL,
        public mixed $type = NULL,
        public mixed $is_admin = NULL,
        public mixed $admin_level = NULL,
        public mixed $is_member = NULL,
        public mixed $is_advertiser = NULL,
        public ?int $start_date = NULL,
        public ?int $finish_date = NULL,
        public mixed $verified = NULL,
        public ?string $deactivated = NULL,
        public ?string $photo_50 = NULL,
        public ?string $photo_100 = NULL,
        public ?string $photo_200 = NULL,
        public ?string $photo_200_orig = NULL,
        public ?string $photo_400 = NULL,
        public ?string $photo_400_orig = NULL,
        public ?string $photo_max = NULL,
        public ?string $photo_max_orig = NULL,
        public ?string $est_date = NULL,
        public ?string $public_date_label = NULL,
        public mixed $photo_max_size = NULL,
        public mixed $is_video_live_notifications_blocked = NULL,
        public mixed $video_live = NULL
    ) {}
}