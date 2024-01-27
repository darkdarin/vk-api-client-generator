<?php

namespace App\Api\Generated\Build\Objects;

readonly class UtilsLinkStatsExtended
{
    /**
     * @param string|null $key Link key (characters after vk.cc/)
     * @param array|null $stats
     */
    public function __construct(public ?string $key = NULL, public ?array $stats = NULL)
    {}
}