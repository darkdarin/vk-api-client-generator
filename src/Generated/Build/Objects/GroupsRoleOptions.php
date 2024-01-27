<?php

namespace App\Api\Generated\Build\Objects;

enum GroupsRoleOptions: string
{
    case Moderator = 'moderator';
    case Editor = 'editor';
    case Administrator = 'administrator';
    case Creator = 'creator';
}