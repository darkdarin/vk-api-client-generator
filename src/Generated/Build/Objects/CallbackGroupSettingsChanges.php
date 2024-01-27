<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackGroupSettingsChanges
{
    /**
     * @param string|null $title
     * @param string|null $description
     * @param mixed $access
     * @param string|null $screen_name
     * @param int|null $public_category
     * @param int|null $public_subcategory
     * @param mixed $age_limits
     * @param string|null $website
     * @param mixed $enable_status_default
     * @param mixed $enable_audio
     * @param mixed $enable_video
     * @param mixed $enable_photo
     * @param mixed $enable_market
     */
    public function __construct(
        public ?string $title = NULL,
        public ?string $description = NULL,
        public mixed $access = NULL,
        public ?string $screen_name = NULL,
        public ?int $public_category = NULL,
        public ?int $public_subcategory = NULL,
        public mixed $age_limits = NULL,
        public ?string $website = NULL,
        public mixed $enable_status_default = NULL,
        public mixed $enable_audio = NULL,
        public mixed $enable_video = NULL,
        public mixed $enable_photo = NULL,
        public mixed $enable_market = NULL
    ) {}
}