<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsBanInfo
{
    /**
     * @param int|null $admin_id Administrator ID
     * @param string|null $comment Comment for a ban
     * @param bool|null $comment_visible Show comment for user
     * @param bool|null $is_closed
     * @param int|null $date Date when user has been added to blacklist in Unixtime
     * @param int|null $end_date Date when user will be removed from blacklist in Unixtime
     * @param mixed $reason
     */
    public function __construct(
        public ?int $admin_id = NULL,
        public ?string $comment = NULL,
        public ?bool $comment_visible = NULL,
        public ?bool $is_closed = NULL,
        public ?int $date = NULL,
        public ?int $end_date = NULL,
        public mixed $reason = NULL
    ) {}
}