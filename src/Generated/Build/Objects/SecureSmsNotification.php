<?php

namespace App\Api\Generated\Build\Objects;

readonly class SecureSmsNotification
{
    /**
     * @param string|null $app_id Application ID
     * @param string|null $date Date when message has been sent in Unixtime
     * @param string|null $id Notification ID
     * @param string|null $message Messsage text
     * @param string|null $user_id User ID
     */
    public function __construct(
        public ?string $app_id = NULL,
        public ?string $date = NULL,
        public ?string $id = NULL,
        public ?string $message = NULL,
        public ?string $user_id = NULL
    ) {}
}