<?php

namespace App\Api\Generated\Build\Objects;

readonly class FavePage
{
    /**
     * @param string $description Some info about user or group
     * @param array $tags
     * @param mixed $type Item type
     * @param mixed $group
     * @param int|null $updated_date Timestamp, when this page was bookmarked
     * @param mixed $user
     */
    public function __construct(
        public string $description,
        public array $tags,
        public mixed $type,
        public mixed $group = NULL,
        public ?int $updated_date = NULL,
        public mixed $user = NULL
    ) {}
}