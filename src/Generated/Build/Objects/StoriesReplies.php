<?php

namespace App\Api\Generated\Build\Objects;

readonly class StoriesReplies
{
    /**
     * @param int $count Replies number.
     * @param int|null $new New replies number.
     */
    public function __construct(public int $count, public ?int $new = NULL)
    {}
}