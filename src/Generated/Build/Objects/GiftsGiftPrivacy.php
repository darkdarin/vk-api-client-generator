<?php

namespace App\Api\Generated\Build\Objects;

enum GiftsGiftPrivacy: int
{
    case NameAndMessageForAll = 0;
    case NameForAll = 1;
    case NameAndMessageForRecipientOnly = 2;
}