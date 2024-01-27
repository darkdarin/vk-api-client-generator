<?php

namespace App\Api\Generated\Build\Objects;

readonly class DocsDocTypes
{
    /**
     * @param int $id Doc type ID
     * @param string $name Doc type title
     * @param int $count Number of docs
     */
    public function __construct(public int $id, public string $name, public int $count)
    {}
}