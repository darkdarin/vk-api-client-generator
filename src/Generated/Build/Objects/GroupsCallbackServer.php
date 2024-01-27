<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\GroupsCallbackServer\Status;

readonly class GroupsCallbackServer
{
    /**
     * @param int $id
     * @param string $title
     * @param int $creator_id
     * @param string $url
     * @param string $secret_key
     * @param Status $status
     */
    public function __construct(
        public int $id,
        public string $title,
        public int $creator_id,
        public string $url,
        public string $secret_key,
        public Status $status
    ) {}
}