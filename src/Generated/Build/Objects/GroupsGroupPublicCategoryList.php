<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsGroupPublicCategoryList
{
    /**
     * @param int|null $id
     * @param string|null $name
     * @param array|null $subcategories
     */
    public function __construct(
        public ?int $id = NULL,
        public ?string $name = NULL,
        public ?array $subcategories = NULL
    ) {}
}