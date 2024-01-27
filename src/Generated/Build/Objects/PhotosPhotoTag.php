<?php

namespace App\Api\Generated\Build\Objects;

readonly class PhotosPhotoTag
{
    /**
     * @param int $date Date when tag has been added in Unixtime
     * @param int $id Tag ID
     * @param int $placer_id ID of the tag creator
     * @param string $tagged_name Tag description
     * @param int $user_id Tagged user ID
     * @param mixed $viewed Information whether the tag is reviewed
     * @param float $x Coordinate X of the left upper corner
     * @param float $x2 Coordinate X of the right lower corner
     * @param float $y Coordinate Y of the left upper corner
     * @param float $y2 Coordinate Y of the right lower corner
     * @param string|null $description Tagged description.
     */
    public function __construct(
        public int $date,
        public int $id,
        public int $placer_id,
        public string $tagged_name,
        public int $user_id,
        public mixed $viewed,
        public float $x,
        public float $x2,
        public float $y,
        public float $y2,
        public ?string $description = NULL
    ) {}
}