<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsTargetGroup
{
    /**
     * @param int|null $id Group ID
     * @param string|null $name Group name
     * @param bool|null $is_audience Is audience
     * @param bool|null $is_shared Is shared
     * @param bool|null $file_source File source
     * @param bool|null $api_source API source
     * @param bool|null $lookalike_source File source
     * @param int|null $audience_count Audience
     * @param string|null $domain Site domain
     * @param int|null $lifetime Number of days for user to be in group
     * @param string|null $pixel Pixel code
     * @param int|null $target_pixel_id Target Pixel id
     * @param array|null $target_pixel_rules Target Pixel rules
     * @param int|null $last_updated Last updated
     */
    public function __construct(
        public ?int $id = NULL,
        public ?string $name = NULL,
        public ?bool $is_audience = NULL,
        public ?bool $is_shared = NULL,
        public ?bool $file_source = NULL,
        public ?bool $api_source = NULL,
        public ?bool $lookalike_source = NULL,
        public ?int $audience_count = NULL,
        public ?string $domain = NULL,
        public ?int $lifetime = NULL,
        public ?string $pixel = NULL,
        public ?int $target_pixel_id = NULL,
        public ?array $target_pixel_rules = NULL,
        public ?int $last_updated = NULL
    ) {}
}