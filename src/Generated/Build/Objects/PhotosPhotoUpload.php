<?php

namespace App\Api\Generated\Build\Objects;

readonly class PhotosPhotoUpload
{
    /**
     * @param int $album_id Album ID
     * @param string $upload_url URL to upload photo
     * @param int $user_id User ID
     * @param string|null $fallback_upload_url Fallback URL if upload_url returned error
     * @param int|null $group_id Group ID
     */
    public function __construct(
        public int $album_id,
        public string $upload_url,
        public int $user_id,
        public ?string $fallback_upload_url = NULL,
        public ?int $group_id = NULL
    ) {}
}