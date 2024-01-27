<?php

namespace App\Api\Generated\Build\Objects;

readonly class NotificationsNotification
{
    /**
     * @param int|null $date Date when the event has been occurred
     * @param mixed $feedback
     * @param mixed $parent
     * @param mixed $reply
     * @param string|null $type Notification type
     */
    public function __construct(
        public ?int $date = NULL,
        public mixed $feedback = NULL,
        public mixed $parent = NULL,
        public mixed $reply = NULL,
        public ?string $type = NULL
    ) {}
}