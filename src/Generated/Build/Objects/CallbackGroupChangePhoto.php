<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackGroupChangePhoto
{
    /**
     * @param int $user_id
     * @param mixed $photo
     */
    public function __construct(public int $user_id, public mixed $photo)
    {}
}