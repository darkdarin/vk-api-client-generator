<?php

namespace App\Api\Generated\Build\Objects;

readonly class WallWallpost
{
    /**
     * @param string|null $access_key Access key to private object
     * @param bool|null $is_deleted
     * @param string|null $deleted_reason
     * @param string|null $deleted_details
     * @param array|null $attachments
     * @param mixed $copyright Information about the source of the post
     * @param int|null $date Date of publishing in Unixtime
     * @param int|null $edited Date of editing in Unixtime
     * @param int|null $from_id Post author ID
     * @param mixed $geo
     * @param int|null $id Post ID
     * @param bool|null $is_archived Is post archived, only for post owners
     * @param bool|null $is_favorite Information whether the post in favorites list
     * @param mixed $likes Count of likes
     * @param int|null $owner_id Wall owner's ID
     * @param int|null $post_id If post type 'reply', contains original post ID
     * @param list<int>|null $parents_stack If post type 'reply', contains original parent IDs stack
     * @param mixed $post_source
     * @param mixed $post_type
     * @param mixed $reposts
     * @param int|null $signer_id Post signer ID
     * @param string|null $text Post text
     * @param mixed $views Count of views
     */
    public function __construct(
        public ?string $access_key = NULL,
        public ?bool $is_deleted = NULL,
        public ?string $deleted_reason = NULL,
        public ?string $deleted_details = NULL,
        public ?array $attachments = NULL,
        public mixed $copyright = NULL,
        public ?int $date = NULL,
        public ?int $edited = NULL,
        public ?int $from_id = NULL,
        public mixed $geo = NULL,
        public ?int $id = NULL,
        public ?bool $is_archived = NULL,
        public ?bool $is_favorite = NULL,
        public mixed $likes = NULL,
        public ?int $owner_id = NULL,
        public ?int $post_id = NULL,
        public ?array $parents_stack = NULL,
        public mixed $post_source = NULL,
        public mixed $post_type = NULL,
        public mixed $reposts = NULL,
        public ?int $signer_id = NULL,
        public ?string $text = NULL,
        public mixed $views = NULL
    ) {}
}