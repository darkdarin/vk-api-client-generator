<?php

namespace App\Api\Generated\Build\Objects;

enum PagesPrivacySettings: int
{
    case CommunityManagersOnly = 0;
    case CommunityMembersOnly = 1;
    case Everyone = 2;
}