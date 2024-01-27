<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsGroupCategory
{
    /**
     * @param int $id Category ID
     * @param string $name Category name
     * @param array|null $subcategories
     */
    public function __construct(public int $id, public string $name, public ?array $subcategories = NULL)
    {}
}