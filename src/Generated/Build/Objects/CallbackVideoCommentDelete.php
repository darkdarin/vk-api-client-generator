<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackVideoCommentDelete
{
    /**
     * @param int $id
     * @param int $owner_id
     * @param int $user_id
     * @param int $video_id
     */
    public function __construct(
        public int $id,
        public int $owner_id,
        public int $user_id,
        public int $video_id
    ) {}
}