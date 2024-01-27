<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesMessageRequestData
{
    /**
     * @param string|null $status Status of message request
     * @param int|null $inviter_id Message request sender id
     * @param int|null $request_date Message request date
     */
    public function __construct(
        public ?string $status = NULL,
        public ?int $inviter_id = NULL,
        public ?int $request_date = NULL
    ) {}
}