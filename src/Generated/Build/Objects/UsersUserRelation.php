<?php

namespace App\Api\Generated\Build\Objects;

enum UsersUserRelation: int
{
    case NotSpecified = 0;
    case Single = 1;
    case InARelationship = 2;
    case Engaged = 3;
    case Married = 4;
    case Complicated = 5;
    case ActivelySearching = 6;
    case InLove = 7;
    case InACivilUnion = 8;
}