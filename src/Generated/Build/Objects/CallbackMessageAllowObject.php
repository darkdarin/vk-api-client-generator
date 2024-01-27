<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackMessageAllowObject
{
    /**
     * @param int $user_id
     * @param string $key
     */
    public function __construct(public int $user_id, public string $key)
    {}
}