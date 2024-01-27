<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsProfileItem
{
    /**
     * @param int $id User id
     * @param string $photo_50 Url for user photo
     * @param string $photo_100 Url for user photo
     * @param string $first_name User first name
     */
    public function __construct(
        public int $id,
        public string $photo_50,
        public string $photo_100,
        public string $first_name
    ) {}
}