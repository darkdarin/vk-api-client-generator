<?php

namespace App\Api\Generated\Build\Objects;

readonly class VideoSaveResult
{
    /**
     * @param string|null $access_key Video access key
     * @param string|null $description Video description
     * @param int|null $owner_id Video owner ID
     * @param string|null $title Video title
     * @param string|null $upload_url URL for the video uploading
     * @param int|null $video_id Video ID
     */
    public function __construct(
        public ?string $access_key = NULL,
        public ?string $description = NULL,
        public ?int $owner_id = NULL,
        public ?string $title = NULL,
        public ?string $upload_url = NULL,
        public ?int $video_id = NULL
    ) {}
}