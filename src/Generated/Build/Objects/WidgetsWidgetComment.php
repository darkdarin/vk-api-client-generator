<?php

namespace App\Api\Generated\Build\Objects;

readonly class WidgetsWidgetComment
{
    /**
     * @param int $date Date when the comment has been added in Unixtime
     * @param int $from_id Comment author ID
     * @param int $id Comment ID
     * @param string $post_type Post type
     * @param string $text Comment text
     * @param int $to_id Wall owner
     * @param array|null $attachments
     * @param int|null $owner_id Wall owner's ID
     * @param mixed $can_delete Information whether current user can delete the comment
     * @param mixed $comments
     * @param mixed $likes
     * @param mixed $media
     * @param mixed $post_source
     * @param mixed $reposts
     * @param mixed $user
     * @param mixed $is_favorite Information whether the post in favorites list
     * @param float|null $short_text_rate Preview length control parameter
     */
    public function __construct(
        public int $date,
        public int $from_id,
        public int $id,
        public string $post_type,
        public string $text,
        public int $to_id,
        public ?array $attachments = NULL,
        public ?int $owner_id = NULL,
        public mixed $can_delete = NULL,
        public mixed $comments = NULL,
        public mixed $likes = NULL,
        public mixed $media = NULL,
        public mixed $post_source = NULL,
        public mixed $reposts = NULL,
        public mixed $user = NULL,
        public mixed $is_favorite = NULL,
        public ?float $short_text_rate = NULL
    ) {}
}