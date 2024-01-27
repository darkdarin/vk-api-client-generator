<?php

namespace App\Api\Generated\Build\Objects;

readonly class WallPostSource
{
    /**
     * @param string|null $data Additional data
     * @param string|null $platform Platform name
     * @param mixed $type
     * @param string|null $url URL to an external site used to publish the post
     * @param mixed $link
     */
    public function __construct(
        public ?string $data = NULL,
        public ?string $platform = NULL,
        public mixed $type = NULL,
        public ?string $url = NULL,
        public mixed $link = NULL
    ) {}
}