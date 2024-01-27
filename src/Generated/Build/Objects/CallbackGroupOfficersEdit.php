<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackGroupOfficersEdit
{
    /**
     * @param int $admin_id
     * @param int $user_id
     * @param mixed $level_old
     * @param mixed $level_new
     */
    public function __construct(
        public int $admin_id,
        public int $user_id,
        public mixed $level_old,
        public mixed $level_new
    ) {}
}