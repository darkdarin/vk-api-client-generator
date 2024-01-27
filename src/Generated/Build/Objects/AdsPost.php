<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsPost
{
    /**
     * @param int|null $id Post id
     * @param int|null $from_id From id
     * @param int|null $owner_id Owner id
     * @param int|null $date Date
     * @param int|null $edited Edited date
     * @param int|null $is_pinned Is pinned
     * @param int|null $marked_as_ads Marked as ads
     * @param mixed $ads_easy_promote
     * @param mixed $donut
     * @param mixed $comments
     * @param float|null $short_text_rate Short text rate
     * @param string|null $type Type
     * @param bool|null $is_favorite Is favorite
     * @param mixed $likes
     * @param mixed $views
     * @param string|null $post_type Post type
     * @param mixed $reposts
     * @param string|null $text Text
     * @param bool|null $is_promoted_post_stealth Is promoted post stealth
     * @param string|null $hash Hash
     * @param mixed $owner
     * @param array|null $attachments
     * @param int|null $created_by Created by
     * @param int|null $carousel_offset Carousel offset
     * @param int|null $can_edit Can edit
     * @param int|null $can_delete Can delete
     * @param int|null $can_pin Can pin
     */
    public function __construct(
        public ?int $id = NULL,
        public ?int $from_id = NULL,
        public ?int $owner_id = NULL,
        public ?int $date = NULL,
        public ?int $edited = NULL,
        public ?int $is_pinned = NULL,
        public ?int $marked_as_ads = NULL,
        public mixed $ads_easy_promote = NULL,
        public mixed $donut = NULL,
        public mixed $comments = NULL,
        public ?float $short_text_rate = NULL,
        public ?string $type = NULL,
        public ?bool $is_favorite = NULL,
        public mixed $likes = NULL,
        public mixed $views = NULL,
        public ?string $post_type = NULL,
        public mixed $reposts = NULL,
        public ?string $text = NULL,
        public ?bool $is_promoted_post_stealth = NULL,
        public ?string $hash = NULL,
        public mixed $owner = NULL,
        public ?array $attachments = NULL,
        public ?int $created_by = NULL,
        public ?int $carousel_offset = NULL,
        public ?int $can_edit = NULL,
        public ?int $can_delete = NULL,
        public ?int $can_pin = NULL
    ) {}
}