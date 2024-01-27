<?php

namespace App\Api\Generated\Build\Objects;

readonly class PhotosPhotoAlbum
{
    /**
     * @param int $created Date when the album has been created in Unixtime
     * @param int $id Photo album ID
     * @param int $owner_id Album owner's ID
     * @param int $size Photos number
     * @param string $title Photo album title
     * @param int $updated Date when the album has been updated last time in Unixtime
     * @param string|null $description Photo album description
     * @param mixed $thumb
     */
    public function __construct(
        public int $created,
        public int $id,
        public int $owner_id,
        public int $size,
        public string $title,
        public int $updated,
        public ?string $description = NULL,
        public mixed $thumb = NULL
    ) {}
}