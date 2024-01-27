<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsAccount
{
    /**
     * @param mixed $access_role
     * @param int $account_id Account ID
     * @param mixed $account_status Information whether account is active
     * @param mixed $account_type
     * @param string $account_name Account name
     * @param bool $can_view_budget Can user view account budget
     */
    public function __construct(
        public mixed $access_role,
        public int $account_id,
        public mixed $account_status,
        public mixed $account_type,
        public string $account_name,
        public bool $can_view_budget
    ) {}
}