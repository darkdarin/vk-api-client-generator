<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesChatSettingsAcl
{
    /**
     * @param bool $can_change_info Can you change photo, description and name
     * @param bool $can_change_invite_link Can you change invite link for this chat
     * @param bool $can_change_pin Can you pin/unpin message for this chat
     * @param bool $can_invite Can you invite other peers in chat
     * @param bool $can_promote_users Can you promote simple users to chat admins
     * @param bool $can_see_invite_link Can you see invite link for this chat
     * @param bool $can_moderate Can you moderate (delete) other users' messages
     * @param bool $can_copy_chat Can you copy chat
     * @param bool $can_call Can you init group call in the chat
     * @param bool $can_use_mass_mentions Can you use mass mentions
     * @param bool|null $can_change_service_type Can you change chat service type
     */
    public function __construct(
        public bool $can_change_info,
        public bool $can_change_invite_link,
        public bool $can_change_pin,
        public bool $can_invite,
        public bool $can_promote_users,
        public bool $can_see_invite_link,
        public bool $can_moderate,
        public bool $can_copy_chat,
        public bool $can_call,
        public bool $can_use_mass_mentions,
        public ?bool $can_change_service_type = NULL
    ) {}
}