<?php

namespace App\Api\Generated\Build\Objects;

enum GroupsGroupFullMemberStatus: int
{
    case NotAMember = 0;
    case Member = 1;
    case NotSure = 2;
    case Declined = 3;
    case HasSentARequest = 4;
    case Invited = 5;
}