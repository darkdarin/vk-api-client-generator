<?php

namespace App\Api\Generated\Build\Objects;

readonly class PagesWikipage
{
    /**
     * @param int $group_id Community ID
     * @param int $id Page ID
     * @param string $title Page title
     * @param int $views Views number
     * @param mixed $who_can_edit Edit settings of the page
     * @param mixed $who_can_view View settings of the page
     * @param int|null $creator_id Page creator ID
     * @param string|null $creator_name Page creator name
     * @param int|null $editor_id Last editor ID
     * @param string|null $editor_name Last editor name
     */
    public function __construct(
        public int $group_id,
        public int $id,
        public string $title,
        public int $views,
        public mixed $who_can_edit,
        public mixed $who_can_view,
        public ?int $creator_id = NULL,
        public ?string $creator_name = NULL,
        public ?int $editor_id = NULL,
        public ?string $editor_name = NULL
    ) {}
}