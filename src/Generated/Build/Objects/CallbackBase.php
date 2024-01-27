<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackBase
{
    /**
     * @param mixed $type
     * @param int $group_id
     * @param string $event_id Unique event id. If it passed twice or more - you should ignore it.
     * @param string $v API object version
     * @param string|null $secret
     */
    public function __construct(
        public mixed $type,
        public int $group_id,
        public string $event_id,
        public string $v,
        public ?string $secret = NULL
    ) {}
}