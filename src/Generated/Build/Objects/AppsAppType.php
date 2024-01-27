<?php

namespace App\Api\Generated\Build\Objects;

enum AppsAppType: string
{
    case App = 'app';
    case Game = 'game';
    case Site = 'site';
    case Standalone = 'standalone';
    case VkApp = 'vk_app';
    case CommunityApp = 'community_app';
    case Html5Game = 'html5_game';
    case MiniApp = 'mini_app';
}