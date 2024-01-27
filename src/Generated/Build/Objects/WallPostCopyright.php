<?php

namespace App\Api\Generated\Build\Objects;

readonly class WallPostCopyright
{
    /**
     * @param string $link
     * @param string $name
     * @param string $type
     * @param int|null $id
     */
    public function __construct(
        public string $link,
        public string $name,
        public string $type,
        public ?int $id = NULL
    ) {}
}