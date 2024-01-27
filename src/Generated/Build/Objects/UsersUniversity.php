<?php

namespace App\Api\Generated\Build\Objects;

readonly class UsersUniversity
{
    /**
     * @param int|null $chair Chair ID
     * @param string|null $chair_name Chair name
     * @param int|null $city City ID
     * @param int|null $country Country ID
     * @param string|null $education_form Education form
     * @param int|null $education_form_id Education form id
     * @param string|null $education_status Education status
     * @param int|null $education_status_id Education status id
     * @param int|null $faculty Faculty ID
     * @param string|null $faculty_name Faculty name
     * @param int|null $graduation Graduation year
     * @param int|null $id University ID
     * @param string|null $name University name
     * @param int|null $university_group_id
     */
    public function __construct(
        public ?int $chair = NULL,
        public ?string $chair_name = NULL,
        public ?int $city = NULL,
        public ?int $country = NULL,
        public ?string $education_form = NULL,
        public ?int $education_form_id = NULL,
        public ?string $education_status = NULL,
        public ?int $education_status_id = NULL,
        public ?int $faculty = NULL,
        public ?string $faculty_name = NULL,
        public ?int $graduation = NULL,
        public ?int $id = NULL,
        public ?string $name = NULL,
        public ?int $university_group_id = NULL
    ) {}
}