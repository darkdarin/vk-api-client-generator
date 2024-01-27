<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackGroupJoin
{
    /**
     * @param int $user_id
     * @param mixed $join_type
     */
    public function __construct(public int $user_id, public mixed $join_type)
    {}
}