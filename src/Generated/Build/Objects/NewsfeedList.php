<?php

namespace App\Api\Generated\Build\Objects;

readonly class NewsfeedList
{
    /**
     * @param int $id List ID
     * @param string $title List title
     */
    public function __construct(public int $id, public string $title)
    {}
}