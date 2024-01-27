<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsAddress
{
    /**
     * @param int $id Address id
     * @param string|null $additional_address Additional address to the place (6 floor, left door)
     * @param string|null $address String address to the place (Nevsky, 28)
     * @param int|null $city_id City id of address
     * @param int|null $country_id Country id of address
     * @param mixed $city City for address
     * @param mixed $metro_station Metro for address
     * @param mixed $country Country for address
     * @param int|null $distance Distance from the point
     * @param float|null $latitude Address latitude
     * @param float|null $longitude Address longitude
     * @param int|null $metro_station_id Metro id of address
     * @param string|null $phone Address phone
     * @param int|null $time_offset Time offset int minutes from utc time
     * @param mixed $timetable Week timetable for the address
     * @param string|null $title Title of the place (Zinger, etc)
     * @param mixed $work_info_status Status of information about timetable
     * @param int|null $place_id
     */
    public function __construct(
        public int $id,
        public ?string $additional_address = NULL,
        public ?string $address = NULL,
        public ?int $city_id = NULL,
        public ?int $country_id = NULL,
        public mixed $city = NULL,
        public mixed $metro_station = NULL,
        public mixed $country = NULL,
        public ?int $distance = NULL,
        public ?float $latitude = NULL,
        public ?float $longitude = NULL,
        public ?int $metro_station_id = NULL,
        public ?string $phone = NULL,
        public ?int $time_offset = NULL,
        public mixed $timetable = NULL,
        public ?string $title = NULL,
        public mixed $work_info_status = NULL,
        public ?int $place_id = NULL
    ) {}
}