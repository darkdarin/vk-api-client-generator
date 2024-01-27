<?php

namespace App\Api\Generated\Build\Objects;

enum CallbackGroupJoinType: string
{
    case Join = 'join';
    case Unsure = 'unsure';
    case Accepted = 'accepted';
    case Approved = 'approved';
    case Request = 'request';
}