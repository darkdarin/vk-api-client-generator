<?php

namespace App\Api\Generated\Build\Objects;

readonly class BugtrackerComment
{
    /**
     * @param int $bugreport_id
     * @param int $comment_id
     * @param int $created
     * @param string $text
     * @param string|null $meta_text
     * @param int|null $from_id
     * @param string|null $author_name
     * @param string|null $author_photo
     * @param string|null $edit_hash
     * @param string|null $remove_hash
     * @param bool|null $is_hidden
     * @param array|null $attachments
     * @param bool|null $is_unread
     */
    public function __construct(
        public int $bugreport_id,
        public int $comment_id,
        public int $created,
        public string $text,
        public ?string $meta_text = NULL,
        public ?int $from_id = NULL,
        public ?string $author_name = NULL,
        public ?string $author_photo = NULL,
        public ?string $edit_hash = NULL,
        public ?string $remove_hash = NULL,
        public ?bool $is_hidden = NULL,
        public ?array $attachments = NULL,
        public ?bool $is_unread = NULL
    ) {}
}