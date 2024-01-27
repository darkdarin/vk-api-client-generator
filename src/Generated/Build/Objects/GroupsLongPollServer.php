<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsLongPollServer
{
    /**
     * @param string $key Long Poll key
     * @param string $server Long Poll server address
     * @param string $ts Number of the last event
     */
    public function __construct(public string $key, public string $server, public string $ts)
    {}
}