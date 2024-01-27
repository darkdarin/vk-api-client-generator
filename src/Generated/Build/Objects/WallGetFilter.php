<?php

namespace App\Api\Generated\Build\Objects;

enum WallGetFilter: string
{
    case Owner = 'owner';
    case Others = 'others';
    case All = 'all';
    case Postponed = 'postponed';
    case Suggests = 'suggests';
    case Archived = 'archived';
    case Donut = 'donut';
}