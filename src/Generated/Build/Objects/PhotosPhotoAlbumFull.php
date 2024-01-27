<?php

namespace App\Api\Generated\Build\Objects;

readonly class PhotosPhotoAlbumFull
{
    /**
     * @param int $id Photo album ID
     * @param int $owner_id Album owner's ID
     * @param int $size Photos number
     * @param string $title Photo album title
     * @param mixed $can_upload Information whether current user can upload photo to the album
     * @param mixed $comments_disabled Information whether album comments are disabled
     * @param int|null $created Date when the album has been created in Unixtime, not set for system albums
     * @param string|null $description Photo album description
     * @param bool|null $can_delete album can delete
     * @param bool|null $can_include_to_feed album can be selected to feed
     * @param array|null $sizes
     * @param int|null $thumb_id Thumb photo ID
     * @param mixed $thumb_is_last Information whether the album thumb is last photo
     * @param string|null $thumb_src URL of the thumb image
     * @param int|null $updated Date when the album has been updated last time in Unixtime, not set for system albums
     * @param mixed $upload_by_admins_only Information whether only community administrators can upload photos
     */
    public function __construct(
        public int $id,
        public int $owner_id,
        public int $size,
        public string $title,
        public mixed $can_upload = NULL,
        public mixed $comments_disabled = NULL,
        public ?int $created = NULL,
        public ?string $description = NULL,
        public ?bool $can_delete = NULL,
        public ?bool $can_include_to_feed = NULL,
        public ?array $sizes = NULL,
        public ?int $thumb_id = NULL,
        public mixed $thumb_is_last = NULL,
        public ?string $thumb_src = NULL,
        public ?int $updated = NULL,
        public mixed $upload_by_admins_only = NULL
    ) {}
}