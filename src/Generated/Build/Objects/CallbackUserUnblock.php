<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackUserUnblock
{
    /**
     * @param int $admin_id
     * @param int $user_id
     * @param int $by_end_date
     */
    public function __construct(public int $admin_id, public int $user_id, public int $by_end_date)
    {}
}