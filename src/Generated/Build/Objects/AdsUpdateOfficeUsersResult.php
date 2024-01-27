<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsUpdateOfficeUsersResult
{
    /**
     * @param int $user_id
     * @param bool $is_success
     * @param mixed $error
     */
    public function __construct(public int $user_id, public bool $is_success, public mixed $error = NULL)
    {}
}