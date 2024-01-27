<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackBoardPostDelete
{
    /**
     * @param int $topic_owner_id
     * @param int $topic_id
     * @param int $id
     */
    public function __construct(public int $topic_owner_id, public int $topic_id, public int $id)
    {}
}