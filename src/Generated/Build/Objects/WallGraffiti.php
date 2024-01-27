<?php

namespace App\Api\Generated\Build\Objects;

readonly class WallGraffiti
{
    /**
     * @param int|null $id Graffiti ID
     * @param int|null $owner_id Graffiti owner's ID
     * @param string|null $photo_200 URL of the preview image with 200 px in width
     * @param string|null $photo_586 URL of the preview image with 586 px in width
     * @param int|null $height Graffiti height
     * @param string|null $url Graffiti URL
     * @param int|null $width Graffiti width
     * @param string|null $access_key Access key for graffiti
     */
    public function __construct(
        public ?int $id = NULL,
        public ?int $owner_id = NULL,
        public ?string $photo_200 = NULL,
        public ?string $photo_586 = NULL,
        public ?int $height = NULL,
        public ?string $url = NULL,
        public ?int $width = NULL,
        public ?string $access_key = NULL
    ) {}
}