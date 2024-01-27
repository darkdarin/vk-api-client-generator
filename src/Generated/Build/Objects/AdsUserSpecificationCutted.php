<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsUserSpecificationCutted
{
    /**
     * @param int $user_id
     * @param mixed $role
     * @param int|null $client_id
     * @param bool|null $view_budget
     */
    public function __construct(
        public int $user_id,
        public mixed $role,
        public ?int $client_id = NULL,
        public ?bool $view_budget = NULL
    ) {}
}