<?php

namespace App\Api\Generated\Build\Objects;

enum GroupsFilter: string
{
    case Admin = 'admin';
    case Editor = 'editor';
    case Moder = 'moder';
    case Advertiser = 'advertiser';
    case Groups = 'groups';
    case Publics = 'publics';
    case Events = 'events';
    case HasAddresses = 'has_addresses';
}