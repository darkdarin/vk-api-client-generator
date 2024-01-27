<?php

namespace App\Api\Generated\Build\Objects;

readonly class LeadFormsLead
{
    /**
     * @param int $lead_id
     * @param int $user_id
     * @param int $date
     * @param array $answers
     * @param int|null $ad_id
     */
    public function __construct(
        public int $lead_id,
        public int $user_id,
        public int $date,
        public array $answers,
        public ?int $ad_id = NULL
    ) {}
}