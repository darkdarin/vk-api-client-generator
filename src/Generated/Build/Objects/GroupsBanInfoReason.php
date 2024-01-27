<?php

namespace App\Api\Generated\Build\Objects;

enum GroupsBanInfoReason: int
{
    case Other = 0;
    case Spam = 1;
    case VerbalAbuse = 2;
    case StrongLanguage = 3;
    case Flood = 4;
}