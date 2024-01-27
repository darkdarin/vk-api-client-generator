<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsLookalikeRequestSaveAudienceLevel
{
    /**
     * @param int|null $level Save audience level id, which is used in save audience queries
     * @param int|null $audience_count Saved audience audience size for according level
     */
    public function __construct(public ?int $level = NULL, public ?int $audience_count = NULL)
    {}
}