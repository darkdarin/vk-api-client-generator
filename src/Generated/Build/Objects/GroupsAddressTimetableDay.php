<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Timetable for one day
 */
readonly class GroupsAddressTimetableDay
{
    /**
     * @param int $close_time Close time in minutes
     * @param int $open_time Open time in minutes
     * @param int|null $break_close_time Close time of the break in minutes
     * @param int|null $break_open_time Start time of the break in minutes
     */
    public function __construct(
        public int $close_time,
        public int $open_time,
        public ?int $break_close_time = NULL,
        public ?int $break_open_time = NULL
    ) {}
}