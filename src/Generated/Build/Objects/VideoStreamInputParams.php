<?php

namespace App\Api\Generated\Build\Objects;

readonly class VideoStreamInputParams
{
    /**
     * @param string|null $url
     * @param string|null $key
     * @param string|null $okmp_url
     * @param string|null $webrtc_url
     */
    public function __construct(
        public ?string $url = NULL,
        public ?string $key = NULL,
        public ?string $okmp_url = NULL,
        public ?string $webrtc_url = NULL
    ) {}
}