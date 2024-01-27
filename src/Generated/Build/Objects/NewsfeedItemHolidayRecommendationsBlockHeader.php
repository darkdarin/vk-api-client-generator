<?php

namespace App\Api\Generated\Build\Objects;

readonly class NewsfeedItemHolidayRecommendationsBlockHeader
{
    /**
     * @param string|null $title Title of the header
     * @param string|null $subtitle Subtitle of the header
     * @param array|null $image
     * @param mixed $action
     */
    public function __construct(
        public ?string $title = NULL,
        public ?string $subtitle = NULL,
        public ?array $image = NULL,
        public mixed $action = NULL
    ) {}
}