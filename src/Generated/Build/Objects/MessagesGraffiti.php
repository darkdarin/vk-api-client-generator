<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesGraffiti
{
    /**
     * @param int $id Graffiti ID
     * @param int $owner_id Graffiti owner ID
     * @param string $url Graffiti URL
     * @param int $width Graffiti width
     * @param int $height Graffiti height
     * @param string|null $access_key Access key for graffiti
     */
    public function __construct(
        public int $id,
        public int $owner_id,
        public string $url,
        public int $width,
        public int $height,
        public ?string $access_key = NULL
    ) {}
}