<?php

namespace App\Api\Generated\Build\Objects;

readonly class PhotosPhotoXtrTagInfo
{
    /**
     * @param int $album_id Album ID
     * @param int $date Date when uploaded
     * @param int $id Photo ID
     * @param int $owner_id Photo owner's ID
     * @param string|null $access_key Access key for the photo
     * @param int|null $height Original photo height
     * @param float|null $lat Latitude
     * @param float|null $long Longitude
     * @param string|null $photo_1280 URL of image with 1280 px width
     * @param string|null $photo_130 URL of image with 130 px width
     * @param string|null $photo_2560 URL of image with 2560 px width
     * @param string|null $photo_604 URL of image with 604 px width
     * @param string|null $photo_75 URL of image with 75 px width
     * @param string|null $photo_807 URL of image with 807 px width
     * @param int|null $placer_id ID of the tag creator
     * @param int|null $post_id Post ID
     * @param array|null $sizes
     * @param int|null $tag_created Date when tag has been added in Unixtime
     * @param int|null $tag_id Tag ID
     * @param string|null $text Photo caption
     * @param int|null $user_id ID of the user who have uploaded the photo
     * @param int|null $width Original photo width
     * @param bool|null $has_tags Whether photo has attached tag links
     */
    public function __construct(
        public int $album_id,
        public int $date,
        public int $id,
        public int $owner_id,
        public ?string $access_key = NULL,
        public ?int $height = NULL,
        public ?float $lat = NULL,
        public ?float $long = NULL,
        public ?string $photo_1280 = NULL,
        public ?string $photo_130 = NULL,
        public ?string $photo_2560 = NULL,
        public ?string $photo_604 = NULL,
        public ?string $photo_75 = NULL,
        public ?string $photo_807 = NULL,
        public ?int $placer_id = NULL,
        public ?int $post_id = NULL,
        public ?array $sizes = NULL,
        public ?int $tag_created = NULL,
        public ?int $tag_id = NULL,
        public ?string $text = NULL,
        public ?int $user_id = NULL,
        public ?int $width = NULL,
        public ?bool $has_tags = NULL
    ) {}
}