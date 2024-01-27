<?php

namespace App\Api\Generated\Build\Objects;

enum WallPostSourceType: string
{
    case Vk = 'vk';
    case Widget = 'widget';
    case Api = 'api';
    case Rss = 'rss';
    case Sms = 'sms';
    case Mvk = 'mvk';
}