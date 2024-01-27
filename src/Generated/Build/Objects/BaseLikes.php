<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseLikes
{
    /**
     * @param int|null $count Likes number
     * @param mixed $user_likes Information whether current user likes the photo
     */
    public function __construct(public ?int $count = NULL, public mixed $user_likes = NULL)
    {}
}