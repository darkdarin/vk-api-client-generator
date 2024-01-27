<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseCommentsInfo
{
    /**
     * @param mixed $can_post Information whether current user can comment the post
     * @param mixed $can_open
     * @param mixed $can_close
     * @param mixed $can_view Information whether current user can view the comments
     * @param int|null $count Comments number
     * @param bool|null $groups_can_post Information whether groups can comment the post
     * @param mixed $donut
     * @param array|null $list
     */
    public function __construct(
        public mixed $can_post = NULL,
        public mixed $can_open = NULL,
        public mixed $can_close = NULL,
        public mixed $can_view = NULL,
        public ?int $count = NULL,
        public ?bool $groups_can_post = NULL,
        public mixed $donut = NULL,
        public ?array $list = NULL
    ) {}
}