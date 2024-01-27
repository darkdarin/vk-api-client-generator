<?php

namespace App\Api\Generated\Build\Objects;

enum UtilsLinkCheckedStatus: string
{
    case NotBanned = 'not_banned';
    case Banned = 'banned';
    case Processing = 'processing';
}