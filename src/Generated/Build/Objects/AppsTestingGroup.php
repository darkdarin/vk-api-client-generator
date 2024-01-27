<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\AppsTestingGroup\Platforms;

readonly class AppsTestingGroup
{
    /**
     * @param list<int> $user_ids
     * @param int $group_id
     * @param string|null $name
     * @param string|null $webview
     * @param list<Platforms>|null $platforms
     */
    public function __construct(
        public array $user_ids,
        public int $group_id,
        public ?string $name = NULL,
        public ?string $webview = NULL,
        public ?array $platforms = NULL
    ) {}
}