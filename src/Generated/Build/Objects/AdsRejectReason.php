<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsRejectReason
{
    /**
     * @param string|null $comment Comment text
     * @param array|null $rules
     */
    public function __construct(public ?string $comment = NULL, public ?array $rules = NULL)
    {}
}