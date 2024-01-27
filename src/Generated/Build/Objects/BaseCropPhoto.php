<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseCropPhoto
{
    /**
     * @param mixed $photo
     * @param mixed $crop
     * @param mixed $rect
     */
    public function __construct(public mixed $photo, public mixed $crop, public mixed $rect)
    {}
}