<?php

namespace App\Api\Generated\Build\Objects;

readonly class WidgetsCommentRepliesItem
{
    /**
     * @param int|null $cid Comment ID
     * @param int|null $date Date when the comment has been added in Unixtime
     * @param mixed $likes
     * @param string|null $text Comment text
     * @param int|null $uid User ID
     * @param mixed $user
     */
    public function __construct(
        public ?int $cid = NULL,
        public ?int $date = NULL,
        public mixed $likes = NULL,
        public ?string $text = NULL,
        public ?int $uid = NULL,
        public mixed $user = NULL
    ) {}
}