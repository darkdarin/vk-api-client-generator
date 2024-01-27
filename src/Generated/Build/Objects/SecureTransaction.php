<?php

namespace App\Api\Generated\Build\Objects;

readonly class SecureTransaction
{
    /**
     * @param int|null $date Transaction date in Unixtime
     * @param int|null $id Transaction ID
     * @param int|null $uid_from From ID
     * @param int|null $uid_to To ID
     * @param int|null $votes Votes number
     */
    public function __construct(
        public ?int $date = NULL,
        public ?int $id = NULL,
        public ?int $uid_from = NULL,
        public ?int $uid_to = NULL,
        public ?int $votes = NULL
    ) {}
}