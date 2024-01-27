<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsCallbackSettings
{
    /**
     * @param string|null $api_version API version used for the events
     * @param mixed $events
     */
    public function __construct(public ?string $api_version = NULL, public mixed $events = NULL)
    {}
}