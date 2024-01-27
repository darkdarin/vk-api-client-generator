<?php

namespace App\Api\Generated\Build\Objects;

readonly class BugtrackerAddCompanyGroupsMembersError
{
    /**
     * @param int $group_id
     * @param int $user_id
     */
    public function __construct(public int $group_id, public int $user_id)
    {}
}