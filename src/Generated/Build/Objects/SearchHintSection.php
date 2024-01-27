<?php

namespace App\Api\Generated\Build\Objects;

enum SearchHintSection: string
{
    case Groups = 'groups';
    case Events = 'events';
    case Publics = 'publics';
    case Correspondents = 'correspondents';
    case People = 'people';
    case Friends = 'friends';
    case MutualFriends = 'mutual_friends';
    case Promo = 'promo';
}