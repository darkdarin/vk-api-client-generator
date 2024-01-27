<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsAddressesInfo
{
    /**
     * @param bool $is_enabled Information whether addresses is enabled
     * @param int|null $main_address_id Main address id for group
     * @param mixed $main_address Main address
     * @param int|null $count Count of addresses
     */
    public function __construct(
        public bool $is_enabled,
        public ?int $main_address_id = NULL,
        public mixed $main_address = NULL,
        public ?int $count = NULL
    ) {}
}