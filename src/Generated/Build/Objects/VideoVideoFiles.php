<?php

namespace App\Api\Generated\Build\Objects;

readonly class VideoVideoFiles
{
    /**
     * @param string|null $external URL of the external player
     * @param string|null $mp4_144 URL of the mpeg4 file with 144p quality
     * @param string|null $mp4_240 URL of the mpeg4 file with 240p quality
     * @param string|null $mp4_360 URL of the mpeg4 file with 360p quality
     * @param string|null $mp4_480 URL of the mpeg4 file with 480p quality
     * @param string|null $mp4_720 URL of the mpeg4 file with 720p quality
     * @param string|null $mp4_1080 URL of the mpeg4 file with 1080p quality
     * @param string|null $mp4_1440 URL of the mpeg4 file with 2K quality
     * @param string|null $mp4_2160 URL of the mpeg4 file with 4K quality
     * @param string|null $flv_320 URL of the flv file with 320p quality
     */
    public function __construct(
        public ?string $external = NULL,
        public ?string $mp4_144 = NULL,
        public ?string $mp4_240 = NULL,
        public ?string $mp4_360 = NULL,
        public ?string $mp4_480 = NULL,
        public ?string $mp4_720 = NULL,
        public ?string $mp4_1080 = NULL,
        public ?string $mp4_1440 = NULL,
        public ?string $mp4_2160 = NULL,
        public ?string $flv_320 = NULL
    ) {}
}