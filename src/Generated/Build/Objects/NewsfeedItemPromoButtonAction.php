<?php

namespace App\Api\Generated\Build\Objects;

readonly class NewsfeedItemPromoButtonAction
{
    /**
     * @param string|null $url
     * @param string|null $type
     * @param string|null $target
     */
    public function __construct(
        public ?string $url = NULL,
        public ?string $type = NULL,
        public ?string $target = NULL
    ) {}
}