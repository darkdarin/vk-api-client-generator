<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Ads easy promote
 */
readonly class AdsPostEasyPromote
{
    /**
     * @param int|null $type Type
     * @param string|null $text Text
     * @param string|null $label_text Label text
     * @param string|null $button_text Button text
     * @param bool|null $is_ad_not_easy Is ad not easy
     * @param int|null $ad_id Ad id
     * @param int|null $top_union_id Top union id
     */
    public function __construct(
        public ?int $type = NULL,
        public ?string $text = NULL,
        public ?string $label_text = NULL,
        public ?string $button_text = NULL,
        public ?bool $is_ad_not_easy = NULL,
        public ?int $ad_id = NULL,
        public ?int $top_union_id = NULL
    ) {}
}