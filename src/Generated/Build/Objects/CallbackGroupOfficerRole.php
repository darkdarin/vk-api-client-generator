<?php

namespace App\Api\Generated\Build\Objects;

enum CallbackGroupOfficerRole: int
{
    case None = 0;
    case Moderator = 1;
    case Editor = 2;
    case Administrator = 3;
}