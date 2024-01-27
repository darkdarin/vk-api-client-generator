<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsUserSpecification
{
    /**
     * @param int $user_id
     * @param mixed $role
     * @param bool|null $grant_access_to_all_clients
     * @param list<int>|null $client_ids
     * @param bool|null $view_budget
     */
    public function __construct(
        public int $user_id,
        public mixed $role,
        public ?bool $grant_access_to_all_clients = NULL,
        public ?array $client_ids = NULL,
        public ?bool $view_budget = NULL
    ) {}
}