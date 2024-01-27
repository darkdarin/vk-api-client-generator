<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesMessageActionPhoto
{
    /**
     * @param string $photo_50 URL of the preview image with 50px in width
     * @param string $photo_100 URL of the preview image with 100px in width
     * @param string $photo_200 URL of the preview image with 200px in width
     */
    public function __construct(public string $photo_50, public string $photo_100, public string $photo_200)
    {}
}