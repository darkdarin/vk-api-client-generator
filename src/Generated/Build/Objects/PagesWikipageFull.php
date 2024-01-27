<?php

namespace App\Api\Generated\Build\Objects;

readonly class PagesWikipageFull
{
    /**
     * @param int $created Date when the page has been created in Unixtime
     * @param int $edited Date when the page has been edited in Unixtime
     * @param int $group_id Community ID
     * @param int $id Page ID
     * @param string $title Page title
     * @param string $view_url URL of the page preview
     * @param int $views Views number
     * @param mixed $who_can_edit Edit settings of the page
     * @param mixed $who_can_view View settings of the page
     * @param int|null $creator_id Page creator ID
     * @param mixed $current_user_can_edit Information whether current user can edit the page
     * @param mixed $current_user_can_edit_access Information whether current user can edit the page access settings
     * @param int|null $editor_id Last editor ID
     * @param string|null $html Page content, HTML
     * @param string|null $source Page content, wiki
     * @param string|null $url URL
     * @param string|null $parent Parent
     * @param string|null $parent2 Parent2
     * @param int|null $owner_id Owner ID
     */
    public function __construct(
        public int $created,
        public int $edited,
        public int $group_id,
        public int $id,
        public string $title,
        public string $view_url,
        public int $views,
        public mixed $who_can_edit,
        public mixed $who_can_view,
        public ?int $creator_id = NULL,
        public mixed $current_user_can_edit = NULL,
        public mixed $current_user_can_edit_access = NULL,
        public ?int $editor_id = NULL,
        public ?string $html = NULL,
        public ?string $source = NULL,
        public ?string $url = NULL,
        public ?string $parent = NULL,
        public ?string $parent2 = NULL,
        public ?int $owner_id = NULL
    ) {}
}