<?php

namespace App\Api\Generated\Build\Objects;

readonly class StoriesViewersItem
{
    /**
     * @param bool $is_liked user has like for this object
     * @param int $user_id user id
     * @param mixed $user
     */
    public function __construct(public bool $is_liked, public int $user_id, public mixed $user = NULL)
    {}
}