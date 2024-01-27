<?php

namespace App\Api\Generated\Build\Objects;

readonly class NotificationsSendMessageItem
{
    /**
     * @param int|null $user_id User ID
     * @param bool|null $status Notification status
     * @param mixed $error
     */
    public function __construct(
        public ?int $user_id = NULL,
        public ?bool $status = NULL,
        public mixed $error = NULL
    ) {}
}