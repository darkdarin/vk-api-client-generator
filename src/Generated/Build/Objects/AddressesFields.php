<?php

namespace App\Api\Generated\Build\Objects;

enum AddressesFields: string
{
    case Id = 'id';
    case Title = 'title';
    case Address = 'address';
    case AdditionalAddress = 'additional_address';
    case CountryId = 'country_id';
    case CityId = 'city_id';
    case MetroStationId = 'metro_station_id';
    case Latitude = 'latitude';
    case Longitude = 'longitude';
    case Distance = 'distance';
    case WorkInfoStatus = 'work_info_status';
    case Timetable = 'timetable';
    case Phone = 'phone';
    case TimeOffset = 'time_offset';
}