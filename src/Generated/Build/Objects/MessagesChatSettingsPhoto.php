<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesChatSettingsPhoto
{
    /**
     * @param string|null $photo_50 URL of the preview image with 50px in width
     * @param string|null $photo_100 URL of the preview image with 100px in width
     * @param string|null $photo_200 URL of the preview image with 200px in width
     * @param bool|null $is_default_photo If provided photo is default
     * @param bool|null $is_default_call_photo If provided photo is default call photo
     */
    public function __construct(
        public ?string $photo_50 = NULL,
        public ?string $photo_100 = NULL,
        public ?string $photo_200 = NULL,
        public ?bool $is_default_photo = NULL,
        public ?bool $is_default_call_photo = NULL
    ) {}
}