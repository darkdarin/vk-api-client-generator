<?php

namespace App\Api\Generated\Build\Objects;

readonly class BugtrackerCompanyMember
{
    /**
     * @param int $user_id
     * @param int $company_id
     * @param int $role
     * @param string $role_name
     * @param int $ts
     * @param int $groups_count
     * @param int $products_count
     * @param string $reporter_url
     * @param list<int>|null $groups
     * @param array|null $products
     */
    public function __construct(
        public int $user_id,
        public int $company_id,
        public int $role,
        public string $role_name,
        public int $ts,
        public int $groups_count,
        public int $products_count,
        public string $reporter_url,
        public ?array $groups = NULL,
        public ?array $products = NULL
    ) {}
}