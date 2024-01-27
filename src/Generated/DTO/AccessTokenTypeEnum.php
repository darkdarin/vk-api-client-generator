<?php

namespace App\Api\Generated\DTO;

enum AccessTokenTypeEnum: string
{
    case Open = 'open';
    case User = 'user';
    case Group = 'group';
    case Service = 'service';
}
