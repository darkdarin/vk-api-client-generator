<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesChatRestrictions
{
    /**
     * @param bool|null $admins_promote_users Only admins can promote users to admins
     * @param bool|null $only_admins_edit_info Only admins can change chat info
     * @param bool|null $only_admins_edit_pin Only admins can edit pinned message
     * @param bool|null $only_admins_invite Only admins can invite users to this chat
     * @param bool|null $only_admins_kick Only admins can kick users from this chat
     */
    public function __construct(
        public ?bool $admins_promote_users = NULL,
        public ?bool $only_admins_edit_info = NULL,
        public ?bool $only_admins_edit_pin = NULL,
        public ?bool $only_admins_invite = NULL,
        public ?bool $only_admins_kick = NULL
    ) {}
}