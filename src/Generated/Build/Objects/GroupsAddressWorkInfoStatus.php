<?php

namespace App\Api\Generated\Build\Objects;

enum GroupsAddressWorkInfoStatus: string
{
    case NoInformation = 'no_information';
    case TemporarilyClosed = 'temporarily_closed';
    case AlwaysOpened = 'always_opened';
    case Timetable = 'timetable';
    case ForeverClosed = 'forever_closed';
}