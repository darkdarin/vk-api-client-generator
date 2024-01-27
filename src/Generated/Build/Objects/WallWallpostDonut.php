<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\WallWallpostDonut\EditMode;

/**
 * Info about paid wall post
 */
readonly class WallWallpostDonut
{
    /**
     * @param bool $is_donut Post only for dons
     * @param int|null $paid_duration Value of this field need to pass in wall.post/edit in donut_paid_duration
     * @param mixed $placeholder If placeholder was respond, text and all attachments will be hidden
     * @param bool|null $can_publish_free_copy Says whether group admin can post free copy of this donut post
     * @param EditMode|null $edit_mode Says what user can edit in post about donut properties
     */
    public function __construct(
        public bool $is_donut,
        public ?int $paid_duration = NULL,
        public mixed $placeholder = NULL,
        public ?bool $can_publish_free_copy = NULL,
        public ?EditMode $edit_mode = NULL
    ) {}
}