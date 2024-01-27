<?php

namespace App\Api\Generated\Build\Objects;

readonly class UsersLastSeen
{
    /**
     * @param int|null $platform Type of the platform that used for the last authorization
     * @param int|null $time Last visit date (in Unix time)
     */
    public function __construct(public ?int $platform = NULL, public ?int $time = NULL)
    {}
}