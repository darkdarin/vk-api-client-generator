<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\StoriesFeedItem\Type;

readonly class StoriesFeedItem
{
    /**
     * @param Type $type Type of Feed Item
     * @param string|null $id
     * @param int|null $owner_id
     * @param array|null $stories Author stories
     * @param array|null $grouped Grouped stories of various authors (for types community_grouped_stories/app_grouped_stories type)
     * @param mixed $app App, which stories has been grouped (for type app_grouped_stories)
     * @param mixed $promo_data Additional data for promo stories (for type promo_stories)
     * @param string|null $track_code
     * @param bool|null $has_unseen
     * @param string|null $name
     */
    public function __construct(
        public Type $type,
        public ?string $id = NULL,
        public ?int $owner_id = NULL,
        public ?array $stories = NULL,
        public ?array $grouped = NULL,
        public mixed $app = NULL,
        public mixed $promo_data = NULL,
        public ?string $track_code = NULL,
        public ?bool $has_unseen = NULL,
        public ?string $name = NULL
    ) {}
}