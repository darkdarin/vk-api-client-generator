<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsOrdData
{
    /**
     * @param mixed $client_type
     * @param string $client_name
     * @param string $phone
     * @param string $contract_number
     * @param string $contract_date
     * @param string $contract_type
     * @param string $contract_object
     * @param bool $with_vat
     * @param string|null $inn
     * @param mixed $subagent
     */
    public function __construct(
        public mixed $client_type,
        public string $client_name,
        public string $phone,
        public string $contract_number,
        public string $contract_date,
        public string $contract_type,
        public string $contract_object,
        public bool $with_vat,
        public ?string $inn = NULL,
        public mixed $subagent = NULL
    ) {}
}