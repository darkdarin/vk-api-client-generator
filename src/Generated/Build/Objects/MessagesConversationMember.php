<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesConversationMember
{
    /**
     * @param int $member_id
     * @param bool|null $can_kick Is it possible for user to kick this member
     * @param int|null $invited_by
     * @param bool|null $is_admin
     * @param bool|null $is_owner
     * @param bool|null $is_message_request
     * @param int|null $join_date
     * @param int|null $request_date Message request date
     */
    public function __construct(
        public int $member_id,
        public ?bool $can_kick = NULL,
        public ?int $invited_by = NULL,
        public ?bool $is_admin = NULL,
        public ?bool $is_owner = NULL,
        public ?bool $is_message_request = NULL,
        public ?int $join_date = NULL,
        public ?int $request_date = NULL
    ) {}
}