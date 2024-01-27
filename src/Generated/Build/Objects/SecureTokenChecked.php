<?php

namespace App\Api\Generated\Build\Objects;

readonly class SecureTokenChecked
{
    /**
     * @param int|null $date Date when access_token has been generated in Unixtime
     * @param int|null $expire Date when access_token will expire in Unixtime
     * @param int|null $success Returns if successfully processed
     * @param int|null $user_id User ID
     */
    public function __construct(
        public ?int $date = NULL,
        public ?int $expire = NULL,
        public ?int $success = NULL,
        public ?int $user_id = NULL
    ) {}
}