<?php

namespace App\Api\Generated\Build\Objects;

enum UtilsDomainResolvedType: string
{
    case User = 'user';
    case Group = 'group';
    case Application = 'application';
    case Page = 'page';
    case VkApp = 'vk_app';
    case CommunityApplication = 'community_application';
}