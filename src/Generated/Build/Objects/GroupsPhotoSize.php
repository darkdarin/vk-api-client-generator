<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsPhotoSize
{
    /**
     * @param int $height Image height
     * @param int $width Image width
     */
    public function __construct(public int $height, public int $width)
    {}
}