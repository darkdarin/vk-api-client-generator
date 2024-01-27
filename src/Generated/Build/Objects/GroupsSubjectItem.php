<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsSubjectItem
{
    /**
     * @param int $id Subject ID
     * @param string $name Subject title
     */
    public function __construct(public int $id, public string $name)
    {}
}