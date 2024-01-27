<?php

namespace App\Api\Generated\Build\Objects;

enum FriendsFriendStatusStatus: int
{
    case NotAFriend = 0;
    case OutcomingRequest = 1;
    case IncomingRequest = 2;
    case IsFriend = 3;
}