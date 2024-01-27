<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsGroupAttach
{
    /**
     * @param int $id group ID
     * @param string $text text of attach
     * @param string $status activity or category of group
     * @param int $size size of group
     * @param bool $is_favorite is favorite
     */
    public function __construct(
        public int $id,
        public string $text,
        public string $status,
        public int $size,
        public bool $is_favorite
    ) {}
}