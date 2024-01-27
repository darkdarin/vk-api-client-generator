<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseLinkButtonAction
{
    /**
     * @param mixed $type
     * @param string|null $url Action URL
     * @param string|null $consume_reason
     */
    public function __construct(
        public mixed $type,
        public ?string $url = NULL,
        public ?string $consume_reason = NULL
    ) {}
}