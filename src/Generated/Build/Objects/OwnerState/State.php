<?php

namespace App\Api\Generated\Build\Objects\OwnerState;

enum State: int
{
    case Banned = 1;
    case Adult = 2;
    case Hidden = 3;
    case Deleted = 4;
    case Blacklisted = 5;
}