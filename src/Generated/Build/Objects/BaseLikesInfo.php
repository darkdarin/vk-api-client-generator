<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseLikesInfo
{
    /**
     * @param mixed $can_like Information whether current user can like the post
     * @param int $count Likes number
     * @param mixed $user_likes Information whether current uer has liked the post
     * @param mixed $can_publish Information whether current user can repost
     * @param bool|null $repost_disabled Remove repost feature for post
     */
    public function __construct(
        public mixed $can_like,
        public int $count,
        public mixed $user_likes,
        public mixed $can_publish = NULL,
        public ?bool $repost_disabled = NULL
    ) {}
}