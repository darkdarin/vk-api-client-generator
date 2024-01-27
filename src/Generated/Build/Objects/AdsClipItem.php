<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsClipItem
{
    /**
     * @param int|null $video_id Video id
     * @param string|null $preview_url Preview url
     * @param mixed $link
     */
    public function __construct(
        public ?int $video_id = NULL,
        public ?string $preview_url = NULL,
        public mixed $link = NULL
    ) {}
}