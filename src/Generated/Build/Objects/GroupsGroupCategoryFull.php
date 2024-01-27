<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsGroupCategoryFull
{
    /**
     * @param int $id Category ID
     * @param string $name Category name
     * @param int $page_count Pages number
     * @param array $page_previews
     * @param array|null $subcategories
     */
    public function __construct(
        public int $id,
        public string $name,
        public int $page_count,
        public array $page_previews,
        public ?array $subcategories = NULL
    ) {}
}