<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\VideoVideo\ResponseType;
use App\Api\Generated\Build\Objects\VideoVideo\Type;

readonly class VideoVideo
{
    /**
     * @param ResponseType|null $response_type
     * @param string|null $access_key Video access key
     * @param int|null $adding_date Date when the video has been added in Unixtime
     * @param mixed $can_comment Information whether current user can comment the video
     * @param mixed $can_edit Information whether current user can edit the video
     * @param mixed $can_delete Information whether current user can delete the video
     * @param mixed $can_like Information whether current user can like the video
     * @param int|null $can_repost Information whether current user can repost the video
     * @param mixed $can_subscribe Information whether current user can subscribe to author of the video
     * @param mixed $can_add_to_faves Information whether current user can add the video to favourites
     * @param mixed $can_add Information whether current user can add the video
     * @param mixed $can_attach_link Information whether current user can attach action button to the video
     * @param mixed $can_edit_privacy Information whether current user can edit the video privacy
     * @param mixed $is_private 1 if video is private
     * @param int|null $comments Number of comments
     * @param int|null $date Date when video has been uploaded in Unixtime
     * @param string|null $description Video description
     * @param int|null $duration Video duration in seconds
     * @param array|null $image
     * @param array|null $first_frame
     * @param int|null $width Video width
     * @param int|null $height Video height
     * @param int|null $id Video ID
     * @param int|null $owner_id Video owner ID
     * @param int|null $user_id Id of the user who uploaded the video if it was uploaded to a group by member
     * @param string|null $title Video title
     * @param bool|null $is_favorite Whether video is added to bookmarks
     * @param string|null $player Video embed URL
     * @param mixed $processing Returns if the video is processing
     * @param mixed $converting 1 if  video is being converted
     * @param mixed $added 1 if video is added to user's albums
     * @param mixed $is_subscribed 1 if user is subscribed to author of the video
     * @param string|null $track_code
     * @param mixed $repeat Information whether the video is repeated
     * @param Type|null $type
     * @param int|null $views Number of views
     * @param int|null $local_views If video is external, number of views on vk
     * @param int|null $content_restricted Restriction code
     * @param string|null $content_restricted_message Restriction text
     * @param int|null $balance Live donations balance
     * @param mixed $live 1 if the video is a live stream
     * @param mixed $upcoming 1 if the video is an upcoming stream
     * @param int|null $live_start_time Date in Unixtime when the live stream is scheduled to start by the author
     * @param mixed $live_notify Whether current user is subscribed to the upcoming live stream notification (if not subscribed to the author)
     * @param int|null $spectators Number of spectators of the stream
     * @param string|null $platform External platform
     * @param mixed $likes
     * @param mixed $reposts
     */
    public function __construct(
        public ?ResponseType $response_type = NULL,
        public ?string $access_key = NULL,
        public ?int $adding_date = NULL,
        public mixed $can_comment = NULL,
        public mixed $can_edit = NULL,
        public mixed $can_delete = NULL,
        public mixed $can_like = NULL,
        public ?int $can_repost = NULL,
        public mixed $can_subscribe = NULL,
        public mixed $can_add_to_faves = NULL,
        public mixed $can_add = NULL,
        public mixed $can_attach_link = NULL,
        public mixed $can_edit_privacy = NULL,
        public mixed $is_private = NULL,
        public ?int $comments = NULL,
        public ?int $date = NULL,
        public ?string $description = NULL,
        public ?int $duration = NULL,
        public ?array $image = NULL,
        public ?array $first_frame = NULL,
        public ?int $width = NULL,
        public ?int $height = NULL,
        public ?int $id = NULL,
        public ?int $owner_id = NULL,
        public ?int $user_id = NULL,
        public ?string $title = NULL,
        public ?bool $is_favorite = NULL,
        public ?string $player = NULL,
        public mixed $processing = NULL,
        public mixed $converting = NULL,
        public mixed $added = NULL,
        public mixed $is_subscribed = NULL,
        public ?string $track_code = NULL,
        public mixed $repeat = NULL,
        public ?Type $type = NULL,
        public ?int $views = NULL,
        public ?int $local_views = NULL,
        public ?int $content_restricted = NULL,
        public ?string $content_restricted_message = NULL,
        public ?int $balance = NULL,
        public mixed $live = NULL,
        public mixed $upcoming = NULL,
        public ?int $live_start_time = NULL,
        public mixed $live_notify = NULL,
        public ?int $spectators = NULL,
        public ?string $platform = NULL,
        public mixed $likes = NULL,
        public mixed $reposts = NULL
    ) {}
}