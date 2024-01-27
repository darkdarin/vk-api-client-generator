<?php

namespace App\Api\Generated\Build\Objects\MessagesChatSettingsPermissions;

enum SeeInviteLink: string
{
    case Owner = 'owner';
    case OwnerAndAdmins = 'owner_and_admins';
    case All = 'all';
}