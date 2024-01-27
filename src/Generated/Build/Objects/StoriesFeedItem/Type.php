<?php

namespace App\Api\Generated\Build\Objects\StoriesFeedItem;

enum Type: string
{
    case PromoStories = 'promo_stories';
    case Stories = 'stories';
    case LiveActive = 'live_active';
    case LiveFinished = 'live_finished';
    case AppGroupedStories = 'app_grouped_stories';
    case Discover = 'discover';
}