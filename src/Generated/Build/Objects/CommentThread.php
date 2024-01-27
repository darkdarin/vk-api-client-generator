<?php

namespace App\Api\Generated\Build\Objects;

readonly class CommentThread
{
    /**
     * @param int $count Comments number
     * @param array|null $items
     * @param bool|null $can_post Information whether current user can comment the post
     * @param bool|null $show_reply_button Information whether recommended to display reply button
     * @param bool|null $groups_can_post Information whether groups can comment the post
     */
    public function __construct(
        public int $count,
        public ?array $items = NULL,
        public ?bool $can_post = NULL,
        public ?bool $show_reply_button = NULL,
        public ?bool $groups_can_post = NULL
    ) {}
}