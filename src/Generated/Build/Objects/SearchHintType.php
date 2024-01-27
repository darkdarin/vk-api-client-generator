<?php

namespace App\Api\Generated\Build\Objects;

enum SearchHintType: string
{
    case Group = 'group';
    case Profile = 'profile';
    case VkApp = 'vk_app';
    case App = 'app';
    case Html5Game = 'html5_game';
    case Link = 'link';
}