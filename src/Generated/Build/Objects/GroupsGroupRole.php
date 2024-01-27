<?php

namespace App\Api\Generated\Build\Objects;

enum GroupsGroupRole: string
{
    case Moderator = 'moderator';
    case Editor = 'editor';
    case Administrator = 'administrator';
    case Advertiser = 'advertiser';
}