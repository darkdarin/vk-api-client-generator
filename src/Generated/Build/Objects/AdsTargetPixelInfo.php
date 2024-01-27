<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsTargetPixelInfo
{
    /**
     * @param int $target_pixel_id
     * @param string $name
     * @param string $domain
     * @param int $category_id
     * @param int $last_updated
     * @param string $pixel
     */
    public function __construct(
        public int $target_pixel_id,
        public string $name,
        public string $domain,
        public int $category_id,
        public int $last_updated,
        public string $pixel
    ) {}
}