<?php

namespace App\Api\Generated\Build\Objects;

readonly class PhotosTagsSuggestionItem
{
    /**
     * @param string|null $title
     * @param string|null $caption
     * @param string|null $type
     * @param array|null $buttons
     * @param mixed $photo
     * @param array|null $tags
     * @param string|null $track_code
     */
    public function __construct(
        public ?string $title = NULL,
        public ?string $caption = NULL,
        public ?string $type = NULL,
        public ?array $buttons = NULL,
        public mixed $photo = NULL,
        public ?array $tags = NULL,
        public ?string $track_code = NULL
    ) {}
}