<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\CallbackLikeAddRemove\ObjectType;

readonly class CallbackLikeAddRemove
{
    /**
     * @param int $liker_id
     * @param ObjectType $object_type
     * @param int $object_owner_id
     * @param int $object_id
     * @param int $post_id
     * @param int|null $thread_reply_id
     */
    public function __construct(
        public int $liker_id,
        public ObjectType $object_type,
        public int $object_owner_id,
        public int $object_id,
        public int $post_id,
        public ?int $thread_reply_id = NULL
    ) {}
}