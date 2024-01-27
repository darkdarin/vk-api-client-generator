<?php

namespace App\Api\Generated\Build\Objects;

readonly class UsersUserSettingsXtr
{
    /**
     * @param string $home_town User's hometown
     * @param string $status User status
     * @param mixed $connections
     * @param string|null $bdate User's date of birth
     * @param int|null $bdate_visibility Information whether user's birthdate are hidden
     * @param mixed $city
     * @param mixed $country
     * @param string|null $first_name User first name
     * @param string|null $last_name User last name
     * @param string|null $maiden_name User maiden name
     * @param mixed $name_request
     * @param mixed $personal
     * @param string|null $phone User phone number with some hidden digits
     * @param mixed $relation User relationship status
     * @param mixed $relation_partner
     * @param mixed $relation_pending Information whether relation status is pending
     * @param array|null $relation_requests
     * @param string|null $screen_name Domain name of the user's page
     * @param mixed $sex User sex
     * @param mixed $status_audio
     * @param mixed $interests
     * @param list<string>|null $languages
     */
    public function __construct(
        public string $home_town,
        public string $status,
        public mixed $connections = NULL,
        public ?string $bdate = NULL,
        public ?int $bdate_visibility = NULL,
        public mixed $city = NULL,
        public mixed $country = NULL,
        public ?string $first_name = NULL,
        public ?string $last_name = NULL,
        public ?string $maiden_name = NULL,
        public mixed $name_request = NULL,
        public mixed $personal = NULL,
        public ?string $phone = NULL,
        public mixed $relation = NULL,
        public mixed $relation_partner = NULL,
        public mixed $relation_pending = NULL,
        public ?array $relation_requests = NULL,
        public ?string $screen_name = NULL,
        public mixed $sex = NULL,
        public mixed $status_audio = NULL,
        public mixed $interests = NULL,
        public ?array $languages = NULL
    ) {}
}