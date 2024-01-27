<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsLongPollSettings
{
    /**
     * @param mixed $events
     * @param bool $is_enabled Shows whether Long Poll is enabled
     * @param string|null $api_version API version used for the events
     */
    public function __construct(
        public mixed $events,
        public bool $is_enabled,
        public ?string $api_version = NULL
    ) {}
}