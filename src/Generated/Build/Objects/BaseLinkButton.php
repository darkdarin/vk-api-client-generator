<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseLinkButton
{
    /**
     * @param mixed $action Button action
     * @param string|null $title Button title
     * @param string|null $block_id Target block id
     * @param string|null $section_id Target section id
     * @param string|null $artist_id artist id
     * @param int|null $curator_id curator id
     * @param int|null $album_id Video album id
     * @param int|null $owner_id Owner id
     * @param string|null $icon Button icon name, e.g. 'phone' or 'gift'
     * @param mixed $style
     * @param int|null $audio_id
     * @param string|null $hashtag
     */
    public function __construct(
        public mixed $action = NULL,
        public ?string $title = NULL,
        public ?string $block_id = NULL,
        public ?string $section_id = NULL,
        public ?string $artist_id = NULL,
        public ?int $curator_id = NULL,
        public ?int $album_id = NULL,
        public ?int $owner_id = NULL,
        public ?string $icon = NULL,
        public mixed $style = NULL,
        public ?int $audio_id = NULL,
        public ?string $hashtag = NULL
    ) {}
}