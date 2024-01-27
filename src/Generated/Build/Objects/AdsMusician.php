<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsMusician
{
    /**
     * @param int $id Targeting music artist ID
     * @param string $name Music artist name
     * @param string|null $avatar Music artist photo
     */
    public function __construct(public int $id, public string $name, public ?string $avatar = NULL)
    {}
}