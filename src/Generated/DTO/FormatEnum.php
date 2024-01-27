<?php

namespace App\Api\Generated\DTO;

enum FormatEnum: string
{
    case Json = 'json';
    case Int32 = 'int32';
    case Int64 = 'int64';
    case Uri = 'uri';
    case Hex = 'hex';
    case ValueObject = 'value_object';
}
