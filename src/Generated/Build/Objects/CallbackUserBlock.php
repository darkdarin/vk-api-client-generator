<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackUserBlock
{
    /**
     * @param int $admin_id
     * @param int $user_id
     * @param int $unblock_date
     * @param int $reason
     * @param string|null $comment
     */
    public function __construct(
        public int $admin_id,
        public int $user_id,
        public int $unblock_date,
        public int $reason,
        public ?string $comment = NULL
    ) {}
}