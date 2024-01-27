<?php

namespace App\Api\Generated\Build\Objects;

enum BaseLinkProductStatus: string
{
    case Active = 'active';
    case Blocked = 'blocked';
    case Sold = 'sold';
    case Deleted = 'deleted';
    case Archived = 'archived';
}