<?php

namespace App\Api\Generated\Build\Objects;

enum AccountPushParamsMode: string
{
    case On = 'on';
    case Off = 'off';
    case NoSound = 'no_sound';
    case NoText = 'no_text';
}