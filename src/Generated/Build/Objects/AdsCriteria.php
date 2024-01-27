<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsCriteria
{
    /**
     * @param string|null $age_from Age from
     * @param string|null $age_to Age to
     * @param string|null $apps Apps IDs
     * @param string|null $apps_not Apps IDs to except
     * @param string|null $birthday Days to birthday
     * @param string|null $cities Cities IDs
     * @param string|null $cities_not Cities IDs to except
     * @param string|null $country Country ID
     * @param string|null $districts Districts IDs
     * @param string|null $groups Communities IDs
     * @param string|null $interest_categories Interests categories IDs
     * @param string|null $interests Interests
     * @param string|null $paying Information whether the user has proceeded VK payments before
     * @param string|null $positions Positions IDs
     * @param string|null $religions Religions IDs
     * @param string|null $retargeting_groups Retargeting groups ids
     * @param string|null $retargeting_groups_not Retargeting groups NOT ids
     * @param string|null $school_from School graduation year from
     * @param string|null $school_to School graduation year to
     * @param string|null $schools Schools IDs
     * @param mixed $sex
     * @param string|null $stations Stations IDs
     * @param string|null $statuses Relationship statuses
     * @param string|null $streets Streets IDs
     * @param string|null $travellers Travellers
     * @param string|null $ab_test AB test
     * @param string|null $uni_from University graduation year from
     * @param string|null $uni_to University graduation year to
     * @param string|null $user_browsers Browsers
     * @param string|null $user_devices Devices
     * @param string|null $user_os Operating systems
     * @param string|null $suggested_criteria Suggested criteria
     * @param string|null $groups_not Group not
     * @param string|null $price_list_audience_type Price list audience type
     * @param string|null $count Count
     * @param string|null $groups_active_formula Group active formula
     * @param string|null $interest_categories_formula Interest categories formula
     * @param string|null $groups_formula Groups formula
     * @param string|null $groups_active Groups active
     * @param string|null $group_types Group types
     * @param string|null $key_phrases Key phrases
     * @param string|null $key_phrases_days Key phrases days
     * @param string|null $geo_near Geo near
     * @param string|null $geo_point_type Geo point type
     * @param string|null $price_list_id Price list id
     * @param string|null $groups_recommended Groups recommended ids
     * @param string|null $groups_active_recommended Groups active recommended ids
     * @param string|null $music_artists_formula Music artists formula
     * @param string|null $price_list_retargeting_formula Price list retargeting formula
     * @param string|null $tags Tags
     * @param string|null $browsers Browsers
     * @param string|null $mobile_os_min_version Mobile os min version
     * @param string|null $mobile_apps_events_formula Mobile apps events formula
     * @param string|null $mobile_os_max_version Mobile os max version
     * @param string|null $operators operators
     * @param string|null $wifi_only wifi_only
     * @param string|null $mobile_manufacturers mobile_manufacturers
     */
    public function __construct(
        public ?string $age_from = NULL,
        public ?string $age_to = NULL,
        public ?string $apps = NULL,
        public ?string $apps_not = NULL,
        public ?string $birthday = NULL,
        public ?string $cities = NULL,
        public ?string $cities_not = NULL,
        public ?string $country = NULL,
        public ?string $districts = NULL,
        public ?string $groups = NULL,
        public ?string $interest_categories = NULL,
        public ?string $interests = NULL,
        public ?string $paying = NULL,
        public ?string $positions = NULL,
        public ?string $religions = NULL,
        public ?string $retargeting_groups = NULL,
        public ?string $retargeting_groups_not = NULL,
        public ?string $school_from = NULL,
        public ?string $school_to = NULL,
        public ?string $schools = NULL,
        public mixed $sex = NULL,
        public ?string $stations = NULL,
        public ?string $statuses = NULL,
        public ?string $streets = NULL,
        public ?string $travellers = NULL,
        public ?string $ab_test = NULL,
        public ?string $uni_from = NULL,
        public ?string $uni_to = NULL,
        public ?string $user_browsers = NULL,
        public ?string $user_devices = NULL,
        public ?string $user_os = NULL,
        public ?string $suggested_criteria = NULL,
        public ?string $groups_not = NULL,
        public ?string $price_list_audience_type = NULL,
        public ?string $count = NULL,
        public ?string $groups_active_formula = NULL,
        public ?string $interest_categories_formula = NULL,
        public ?string $groups_formula = NULL,
        public ?string $groups_active = NULL,
        public ?string $group_types = NULL,
        public ?string $key_phrases = NULL,
        public ?string $key_phrases_days = NULL,
        public ?string $geo_near = NULL,
        public ?string $geo_point_type = NULL,
        public ?string $price_list_id = NULL,
        public ?string $groups_recommended = NULL,
        public ?string $groups_active_recommended = NULL,
        public ?string $music_artists_formula = NULL,
        public ?string $price_list_retargeting_formula = NULL,
        public ?string $tags = NULL,
        public ?string $browsers = NULL,
        public ?string $mobile_os_min_version = NULL,
        public ?string $mobile_apps_events_formula = NULL,
        public ?string $mobile_os_max_version = NULL,
        public ?string $operators = NULL,
        public ?string $wifi_only = NULL,
        public ?string $mobile_manufacturers = NULL
    ) {}
}