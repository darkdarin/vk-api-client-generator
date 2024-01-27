<?php

namespace App\Api\Generated\Build\Objects;

enum AdsCampaignType: string
{
    case Normal = 'normal';
    case VkAppsManaged = 'vk_apps_managed';
    case MobileApps = 'mobile_apps';
    case PromotedPosts = 'promoted_posts';
    case AdaptiveAds = 'adaptive_ads';
    case Stories = 'stories';
}