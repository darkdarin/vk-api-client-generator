<?php

namespace App\Api\Generated\Build\Objects;

enum AccountCountersFilter: string
{
    case AppRequests = 'app_requests';
    case Events = 'events';
    case Friends = 'friends';
    case FriendsRecommendations = 'friends_recommendations';
    case Gifts = 'gifts';
    case Groups = 'groups';
    case Messages = 'messages';
    case Notes = 'notes';
    case Notifications = 'notifications';
    case Photos = 'photos';
    case Faves = 'faves';
    case Memories = 'memories';
}