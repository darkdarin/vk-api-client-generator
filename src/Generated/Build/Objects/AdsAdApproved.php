<?php

namespace App\Api\Generated\Build\Objects;

enum AdsAdApproved: int
{
    case NotModerated = 0;
    case PendingModeration = 1;
    case Approved = 2;
    case Rejected = 3;
}