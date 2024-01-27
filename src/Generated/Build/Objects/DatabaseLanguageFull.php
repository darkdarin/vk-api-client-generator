<?php

namespace App\Api\Generated\Build\Objects;

readonly class DatabaseLanguageFull
{
    /**
     * @param int $id Language ID
     * @param string $native_name Language native name
     */
    public function __construct(public int $id, public string $native_name)
    {}
}