<?php

namespace App\Api\Generated\Build\Objects;

readonly class AccountPushSettings
{
    /**
     * @param mixed $disabled Information whether notifications are disabled
     * @param int|null $disabled_until Time until that notifications are disabled in Unixtime
     * @param mixed $settings
     * @param mixed $conversations
     */
    public function __construct(
        public mixed $disabled = NULL,
        public ?int $disabled_until = NULL,
        public mixed $settings = NULL,
        public mixed $conversations = NULL
    ) {}
}