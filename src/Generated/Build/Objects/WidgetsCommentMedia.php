<?php

namespace App\Api\Generated\Build\Objects;

readonly class WidgetsCommentMedia
{
    /**
     * @param int|null $item_id Media item ID
     * @param int|null $owner_id Media owner's ID
     * @param string|null $thumb_src URL of the preview image (type=photo only)
     * @param mixed $type
     */
    public function __construct(
        public ?int $item_id = NULL,
        public ?int $owner_id = NULL,
        public ?string $thumb_src = NULL,
        public mixed $type = NULL
    ) {}
}