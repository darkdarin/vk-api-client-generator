<?php

namespace App\Api\Generated\Build\Objects;

readonly class VideoEpisode
{
    /**
     * @param int|null $time Seconds from start of the video
     * @param string|null $text Description of episode
     */
    public function __construct(public ?int $time = NULL, public ?string $text = NULL)
    {}
}