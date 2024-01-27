<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsLiveCovers
{
    /**
     * @param bool $is_enabled Information whether live covers is enabled
     * @param bool|null $is_scalable Information whether live covers photo scaling is enabled
     * @param list<string>|null $story_ids
     */
    public function __construct(
        public bool $is_enabled,
        public ?bool $is_scalable = NULL,
        public ?array $story_ids = NULL
    ) {}
}