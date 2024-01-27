<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackMarketCommentDelete
{
    /**
     * @param int $owner_id
     * @param int $id
     * @param int $user_id
     * @param int $item_id
     */
    public function __construct(public int $owner_id, public int $id, public int $user_id, public int $item_id)
    {}
}