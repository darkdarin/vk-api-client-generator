<?php

namespace App\Api\Generated\Build\Objects;

readonly class UsersExports
{
    /**
     * @param int|null $facebook
     * @param int|null $livejournal
     * @param int|null $twitter
     */
    public function __construct(
        public ?int $facebook = NULL,
        public ?int $livejournal = NULL,
        public ?int $twitter = NULL
    ) {}
}