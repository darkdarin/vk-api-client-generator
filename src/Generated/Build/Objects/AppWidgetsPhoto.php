<?php

namespace App\Api\Generated\Build\Objects;

readonly class AppWidgetsPhoto
{
    /**
     * @param string $id Image ID
     * @param array $images
     */
    public function __construct(public string $id, public array $images)
    {}
}