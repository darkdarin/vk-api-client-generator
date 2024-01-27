<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\MessagesChatSettingsPermissions\Call;
use App\Api\Generated\Build\Objects\MessagesChatSettingsPermissions\ChangeAdmins;
use App\Api\Generated\Build\Objects\MessagesChatSettingsPermissions\ChangeInfo;
use App\Api\Generated\Build\Objects\MessagesChatSettingsPermissions\ChangePin;
use App\Api\Generated\Build\Objects\MessagesChatSettingsPermissions\Invite;
use App\Api\Generated\Build\Objects\MessagesChatSettingsPermissions\SeeInviteLink;
use App\Api\Generated\Build\Objects\MessagesChatSettingsPermissions\UseMassMentions;

readonly class MessagesChatSettingsPermissions
{
    /**
     * @param Invite|null $invite Who can invite users to chat
     * @param ChangeInfo|null $change_info Who can change chat info
     * @param ChangePin|null $change_pin Who can change pinned message
     * @param UseMassMentions|null $use_mass_mentions Who can use mass mentions
     * @param SeeInviteLink|null $see_invite_link Who can see invite link
     * @param Call|null $call Who can make calls
     * @param ChangeAdmins|null $change_admins Who can change admins
     */
    public function __construct(
        public ?Invite $invite = NULL,
        public ?ChangeInfo $change_info = NULL,
        public ?ChangePin $change_pin = NULL,
        public ?UseMassMentions $use_mass_mentions = NULL,
        public ?SeeInviteLink $see_invite_link = NULL,
        public ?Call $call = NULL,
        public ?ChangeAdmins $change_admins = NULL
    ) {}
}