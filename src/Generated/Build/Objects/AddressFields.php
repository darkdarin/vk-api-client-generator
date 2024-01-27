<?php

namespace App\Api\Generated\Build\Objects;

enum AddressFields: string
{
    case Id = 'id';
    case Title = 'title';
    case Address = 'address';
    case AdditionalAddress = 'additional_address';
    case CountryId = 'country_id';
    case Country = 'country';
    case CityId = 'city_id';
    case City = 'city';
    case MetroStationId = 'metro_station_id';
    case MetroStation = 'metro_station';
    case Latitude = 'latitude';
    case Longitude = 'longitude';
    case Distance = 'distance';
    case WorkInfoStatus = 'work_info_status';
    case Timetable = 'timetable';
    case Phone = 'phone';
    case TimeOffset = 'time_offset';
}