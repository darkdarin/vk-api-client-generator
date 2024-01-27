<?php

namespace App\Api\Generated\Build\Objects;

enum BoardDefaultOrder: int
{
    case DescUpdated = 1;
    case DescCreated = 2;
    case AscUpdated = -1;
    case AscCreated = -2;
}