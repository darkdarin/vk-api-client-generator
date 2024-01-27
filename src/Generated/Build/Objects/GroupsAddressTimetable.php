<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Timetable for a week
 */
readonly class GroupsAddressTimetable
{
    /**
     * @param mixed $fri Timetable for friday
     * @param mixed $mon Timetable for monday
     * @param mixed $sat Timetable for saturday
     * @param mixed $sun Timetable for sunday
     * @param mixed $thu Timetable for thursday
     * @param mixed $tue Timetable for tuesday
     * @param mixed $wed Timetable for wednesday
     */
    public function __construct(
        public mixed $fri = NULL,
        public mixed $mon = NULL,
        public mixed $sat = NULL,
        public mixed $sun = NULL,
        public mixed $thu = NULL,
        public mixed $tue = NULL,
        public mixed $wed = NULL
    ) {}
}