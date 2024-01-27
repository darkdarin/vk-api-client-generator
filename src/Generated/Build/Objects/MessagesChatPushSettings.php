<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesChatPushSettings
{
    /**
     * @param int|null $disabled_until Time until that notifications are disabled
     * @param mixed $sound Information whether the sound is on
     */
    public function __construct(public ?int $disabled_until = NULL, public mixed $sound = NULL)
    {}
}