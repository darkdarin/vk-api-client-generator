<?php

namespace App\Api\Generated\Build\Objects;

readonly class PrettyCardsPrettyCard
{
    /**
     * @param string $card_id Card ID (long int returned as string)
     * @param string $link_url Link URL
     * @param string $photo Photo ID (format "<owner_id>_<media_id>")
     * @param string $title Title
     * @param mixed $button Button key
     * @param string|null $button_text Button text in current language
     * @param array|null $images
     * @param string|null $price Price if set (decimal number returned as string)
     * @param string|null $price_old Old price if set (decimal number returned as string)
     */
    public function __construct(
        public string $card_id,
        public string $link_url,
        public string $photo,
        public string $title,
        public mixed $button = NULL,
        public ?string $button_text = NULL,
        public ?array $images = NULL,
        public ?string $price = NULL,
        public ?string $price_old = NULL
    ) {}
}