<?php

namespace App\Api\Generated\Build\Objects;

readonly class WidgetsCommentReplies
{
    /**
     * @param mixed $can_post Information whether current user can comment the post
     * @param int|null $count Comments number
     * @param array|null $replies
     * @param mixed $groups_can_post Information whether groups can comment the post
     * @param mixed $can_view Information whether current user can view the comments
     */
    public function __construct(
        public mixed $can_post = NULL,
        public ?int $count = NULL,
        public ?array $replies = NULL,
        public mixed $groups_can_post = NULL,
        public mixed $can_view = NULL
    ) {}
}