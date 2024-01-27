<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\NewsfeedItemDigestHeader\Style;

readonly class NewsfeedItemDigestHeader
{
    /**
     * @param string $title Title of the header
     * @param Style $style
     * @param string|null $subtitle Subtitle of the header, when title have two strings
     * @param string|null $badge_text Optional field for red badge in Trends feed blocks
     * @param mixed $button
     */
    public function __construct(
        public string $title,
        public Style $style,
        public ?string $subtitle = NULL,
        public ?string $badge_text = NULL,
        public mixed $button = NULL
    ) {}
}