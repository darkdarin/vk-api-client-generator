<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesLastActivity
{
    /**
     * @param mixed $online Information whether user is online
     * @param int $time Time when user was online in Unixtime
     */
    public function __construct(public mixed $online, public int $time)
    {}
}