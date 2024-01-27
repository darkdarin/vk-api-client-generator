<?php

namespace App\Api\Generated\Build\Objects;

readonly class WallWallComment
{
    /**
     * @param int $id Comment ID
     * @param int $from_id Author ID
     * @param int $date Date when the comment has been added in Unixtime
     * @param string $text Comment text
     * @param mixed $can_edit
     * @param int|null $post_id
     * @param int|null $owner_id
     * @param list<int>|null $parents_stack
     * @param int|null $photo_id
     * @param int|null $video_id
     * @param array|null $attachments
     * @param mixed $donut
     * @param mixed $likes
     * @param int|null $real_offset Real position of the comment
     * @param int|null $reply_to_user Replied user ID
     * @param int|null $reply_to_comment Replied comment ID
     * @param mixed $thread
     * @param bool|null $deleted
     * @param int|null $pid Photo ID
     */
    public function __construct(
        public int $id,
        public int $from_id,
        public int $date,
        public string $text,
        public mixed $can_edit = NULL,
        public ?int $post_id = NULL,
        public ?int $owner_id = NULL,
        public ?array $parents_stack = NULL,
        public ?int $photo_id = NULL,
        public ?int $video_id = NULL,
        public ?array $attachments = NULL,
        public mixed $donut = NULL,
        public mixed $likes = NULL,
        public ?int $real_offset = NULL,
        public ?int $reply_to_user = NULL,
        public ?int $reply_to_comment = NULL,
        public mixed $thread = NULL,
        public ?bool $deleted = NULL,
        public ?int $pid = NULL
    ) {}
}