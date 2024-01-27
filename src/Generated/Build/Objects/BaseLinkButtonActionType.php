<?php

namespace App\Api\Generated\Build\Objects;

enum BaseLinkButtonActionType: string
{
    case OpenUrl = 'open_url';
    case MarketClearRecentQueries = 'market_clear_recent_queries';
    case CloseWebApp = 'close_web_app';
    case OpenSearchTab = 'open_search_tab';
    case ImportContacts = 'import_contacts';
    case AddFriends = 'add_friends';
    case Onboarding = 'onboarding';
}