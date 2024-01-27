<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsLinksItem
{
    /**
     * @param string|null $name Link title
     * @param string|null $desc Link description
     * @param mixed $edit_title Information whether the link title can be edited
     * @param int|null $id Link ID
     * @param string|null $photo_100 URL of square image of the link with 100 pixels in width
     * @param string|null $photo_50 URL of square image of the link with 50 pixels in width
     * @param string|null $url Link URL
     * @param mixed $image_processing Information whether the image on processing
     */
    public function __construct(
        public ?string $name = NULL,
        public ?string $desc = NULL,
        public mixed $edit_title = NULL,
        public ?int $id = NULL,
        public ?string $photo_100 = NULL,
        public ?string $photo_50 = NULL,
        public ?string $url = NULL,
        public mixed $image_processing = NULL
    ) {}
}