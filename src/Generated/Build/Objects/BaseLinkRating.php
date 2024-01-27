<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\BaseLinkRating\Type;

readonly class BaseLinkRating
{
    /**
     * @param int|null $reviews_count Count of reviews
     * @param float|null $stars Count of stars
     * @param Type|null $type
     */
    public function __construct(
        public ?int $reviews_count = NULL,
        public ?float $stars = NULL,
        public ?Type $type = NULL
    ) {}
}