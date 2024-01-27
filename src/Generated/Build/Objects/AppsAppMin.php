<?php

namespace App\Api\Generated\Build\Objects;

readonly class AppsAppMin
{
    /**
     * @param mixed $type
     * @param int $id Application ID
     * @param string $title Application title
     * @param int|null $author_owner_id Application author's ID
     * @param bool|null $is_installed Is application installed
     * @param string|null $icon_139 URL of the app icon with 139 px in width
     * @param string|null $icon_150 URL of the app icon with 150 px in width
     * @param string|null $icon_278 URL of the app icon with 278 px in width
     * @param string|null $icon_576 URL of the app icon with 576 px in width
     * @param string|null $background_loader_color Hex color code without hash sign
     * @param string|null $loader_icon SVG data
     * @param string|null $icon_75 URL of the app icon with 75 px in width
     * @param int|null $screen_orientation Screen orientation
     */
    public function __construct(
        public mixed $type,
        public int $id,
        public string $title,
        public ?int $author_owner_id = NULL,
        public ?bool $is_installed = NULL,
        public ?string $icon_139 = NULL,
        public ?string $icon_150 = NULL,
        public ?string $icon_278 = NULL,
        public ?string $icon_576 = NULL,
        public ?string $background_loader_color = NULL,
        public ?string $loader_icon = NULL,
        public ?string $icon_75 = NULL,
        public ?int $screen_orientation = NULL
    ) {}
}