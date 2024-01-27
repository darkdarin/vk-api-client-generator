<?php

namespace App\Api\Generated\Build\Objects;

readonly class BoardTopicComment
{
    /**
     * @param int $date Date when the comment has been added in Unixtime
     * @param int $from_id Author ID
     * @param int $id Comment ID
     * @param string $text Comment text
     * @param array|null $attachments
     * @param int|null $real_offset Real position of the comment
     * @param mixed $can_edit Information whether current user can edit the comment
     * @param mixed $likes
     */
    public function __construct(
        public int $date,
        public int $from_id,
        public int $id,
        public string $text,
        public ?array $attachments = NULL,
        public ?int $real_offset = NULL,
        public mixed $can_edit = NULL,
        public mixed $likes = NULL
    ) {}
}