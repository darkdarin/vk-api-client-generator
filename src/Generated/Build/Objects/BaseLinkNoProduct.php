<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseLinkNoProduct
{
    /**
     * @param string $url Link URL
     * @param mixed $application
     * @param mixed $button
     * @param string|null $caption Link caption
     * @param string|null $description Link description
     * @param string|null $id Link ID
     * @param bool|null $is_favorite
     * @param mixed $photo
     * @param string|null $preview_page String ID of the page with article preview
     * @param string|null $preview_url URL of the page with article preview
     * @param mixed $rating
     * @param string|null $title Link title
     * @param mixed $target_object
     * @param bool|null $is_external Information whether the current link is external
     * @param mixed $video Video from link
     */
    public function __construct(
        public string $url,
        public mixed $application = NULL,
        public mixed $button = NULL,
        public ?string $caption = NULL,
        public ?string $description = NULL,
        public ?string $id = NULL,
        public ?bool $is_favorite = NULL,
        public mixed $photo = NULL,
        public ?string $preview_page = NULL,
        public ?string $preview_url = NULL,
        public mixed $rating = NULL,
        public ?string $title = NULL,
        public mixed $target_object = NULL,
        public ?bool $is_external = NULL,
        public mixed $video = NULL
    ) {}
}