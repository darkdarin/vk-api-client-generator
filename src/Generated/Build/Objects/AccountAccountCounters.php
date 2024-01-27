<?php

namespace App\Api\Generated\Build\Objects;

readonly class AccountAccountCounters
{
    /**
     * @param int|null $app_requests New app requests number
     * @param int|null $events New events number
     * @param int|null $faves New faves number
     * @param int|null $friends New friends requests number
     * @param int|null $friends_recommendations New friends recommendations number
     * @param int|null $gifts New gifts number
     * @param int|null $groups New groups number
     * @param int|null $messages New messages number
     * @param int|null $memories New memories number
     * @param int|null $notes New notes number
     * @param int|null $notifications New notifications number
     * @param int|null $photos New photo tags number
     */
    public function __construct(
        public ?int $app_requests = NULL,
        public ?int $events = NULL,
        public ?int $faves = NULL,
        public ?int $friends = NULL,
        public ?int $friends_recommendations = NULL,
        public ?int $gifts = NULL,
        public ?int $groups = NULL,
        public ?int $messages = NULL,
        public ?int $memories = NULL,
        public ?int $notes = NULL,
        public ?int $notifications = NULL,
        public ?int $photos = NULL
    ) {}
}