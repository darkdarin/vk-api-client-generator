<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\PhotosTagsSuggestionItemButton\Action;
use App\Api\Generated\Build\Objects\PhotosTagsSuggestionItemButton\Style;

readonly class PhotosTagsSuggestionItemButton
{
    /**
     * @param string|null $title
     * @param Action|null $action
     * @param Style|null $style
     */
    public function __construct(
        public ?string $title = NULL,
        public ?Action $action = NULL,
        public ?Style $style = NULL
    ) {}
}