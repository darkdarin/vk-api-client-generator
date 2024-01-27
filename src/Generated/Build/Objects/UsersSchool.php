<?php

namespace App\Api\Generated\Build\Objects;

readonly class UsersSchool
{
    /**
     * @param int|null $city City ID
     * @param string|null $class School class letter
     * @param int|null $class_id School class id
     * @param int|null $country Country ID
     * @param string|null $id School ID
     * @param string|null $name School name
     * @param int|null $type School type ID
     * @param string|null $type_str School type name
     * @param int|null $year_from Year the user started to study
     * @param int|null $year_graduated Graduation year
     * @param int|null $year_to Year the user finished to study
     * @param string|null $speciality
     */
    public function __construct(
        public ?int $city = NULL,
        public ?string $class = NULL,
        public ?int $class_id = NULL,
        public ?int $country = NULL,
        public ?string $id = NULL,
        public ?string $name = NULL,
        public ?int $type = NULL,
        public ?string $type_str = NULL,
        public ?int $year_from = NULL,
        public ?int $year_graduated = NULL,
        public ?int $year_to = NULL,
        public ?string $speciality = NULL
    ) {}
}