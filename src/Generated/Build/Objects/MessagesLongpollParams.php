<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesLongpollParams
{
    /**
     * @param string $server Server URL
     * @param string $key Key
     * @param int $ts Timestamp
     * @param int|null $pts Persistent timestamp
     */
    public function __construct(
        public string $server,
        public string $key,
        public int $ts,
        public ?int $pts = NULL
    ) {}
}