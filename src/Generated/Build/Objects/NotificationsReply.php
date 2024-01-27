<?php

namespace App\Api\Generated\Build\Objects;

readonly class NotificationsReply
{
    /**
     * @param int|null $date Date when the reply has been created in Unixtime
     * @param int|null $id Reply ID
     * @param int|null $text Reply text
     */
    public function __construct(public ?int $date = NULL, public ?int $id = NULL, public ?int $text = NULL)
    {}
}