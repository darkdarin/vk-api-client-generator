<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsGroupSubcategory
{
    /**
     * @param int $id Object ID
     * @param string $name Object name
     * @param array|null $genders
     */
    public function __construct(public int $id, public string $name, public ?array $genders = NULL)
    {}
}