<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\PhotosPhoto\VerticalAlign;

readonly class PhotosPhoto
{
    /**
     * @param int $album_id Album ID
     * @param int $date Date when uploaded
     * @param int $id Photo ID
     * @param int $owner_id Photo owner's ID
     * @param bool $has_tags Whether photo has attached tag links
     * @param string|null $access_key Access key for the photo
     * @param int|null $height Original photo height
     * @param array|null $images
     * @param float|null $lat Latitude
     * @param float|null $long Longitude
     * @param string|null $photo_256 URL of image with 2560 px width
     * @param mixed $can_comment Information whether current user can comment the photo
     * @param string|null $place
     * @param int|null $post_id Post ID
     * @param array|null $sizes
     * @param string|null $square_crop
     * @param string|null $text Photo caption
     * @param int|null $user_id ID of the user who have uploaded the photo
     * @param int|null $width Original photo width
     * @param mixed $likes
     * @param mixed $comments
     * @param mixed $reposts
     * @param mixed $tags
     * @param mixed $hidden Returns if the photo is hidden above the wall
     * @param int|null $real_offset Real position of the photo
     * @param VerticalAlign|null $vertical_align Sets vertical alignment of a photo
     */
    public function __construct(
        public int $album_id,
        public int $date,
        public int $id,
        public int $owner_id,
        public bool $has_tags,
        public ?string $access_key = NULL,
        public ?int $height = NULL,
        public ?array $images = NULL,
        public ?float $lat = NULL,
        public ?float $long = NULL,
        public ?string $photo_256 = NULL,
        public mixed $can_comment = NULL,
        public ?string $place = NULL,
        public ?int $post_id = NULL,
        public ?array $sizes = NULL,
        public ?string $square_crop = NULL,
        public ?string $text = NULL,
        public ?int $user_id = NULL,
        public ?int $width = NULL,
        public mixed $likes = NULL,
        public mixed $comments = NULL,
        public mixed $reposts = NULL,
        public mixed $tags = NULL,
        public mixed $hidden = NULL,
        public ?int $real_offset = NULL,
        public ?VerticalAlign $vertical_align = NULL
    ) {}
}