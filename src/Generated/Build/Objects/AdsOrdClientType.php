<?php

namespace App\Api\Generated\Build\Objects;

enum AdsOrdClientType: string
{
    case Person = 'person';
    case Individual = 'individual';
    case Legal = 'legal';
    case Foreign = 'foreign';
    case Unknown = 'unknown';
}