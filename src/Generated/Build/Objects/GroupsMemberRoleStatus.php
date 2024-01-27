<?php

namespace App\Api\Generated\Build\Objects;

enum GroupsMemberRoleStatus: string
{
    case Moderator = 'moderator';
    case Editor = 'editor';
    case Administrator = 'administrator';
    case Creator = 'creator';
    case Advertiser = 'advertiser';
}