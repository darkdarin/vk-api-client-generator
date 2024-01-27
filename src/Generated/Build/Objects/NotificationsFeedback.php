<?php

namespace App\Api\Generated\Build\Objects;

readonly class NotificationsFeedback
{
    /**
     * @param array|null $attachments
     * @param int|null $from_id Reply author's ID
     * @param mixed $geo
     * @param int|null $id Item ID
     * @param mixed $likes
     * @param string|null $text Reply text
     * @param int|null $to_id Wall owner's ID
     */
    public function __construct(
        public ?array $attachments = NULL,
        public ?int $from_id = NULL,
        public mixed $geo = NULL,
        public ?int $id = NULL,
        public mixed $likes = NULL,
        public ?string $text = NULL,
        public ?int $to_id = NULL
    ) {}
}