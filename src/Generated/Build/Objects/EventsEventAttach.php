<?php

namespace App\Api\Generated\Build\Objects;

readonly class EventsEventAttach
{
    /**
     * @param string $button_text text of attach
     * @param list<int> $friends array of friends ids
     * @param int $id event ID
     * @param bool $is_favorite is favorite
     * @param string $text text of attach
     * @param string|null $address address of event
     * @param mixed $member_status Current user's member status
     * @param int|null $time event start time
     */
    public function __construct(
        public string $button_text,
        public array $friends,
        public int $id,
        public bool $is_favorite,
        public string $text,
        public ?string $address = NULL,
        public mixed $member_status = NULL,
        public ?int $time = NULL
    ) {}
}