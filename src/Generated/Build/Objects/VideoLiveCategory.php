<?php

namespace App\Api\Generated\Build\Objects;

readonly class VideoLiveCategory
{
    /**
     * @param int $id
     * @param string $label
     * @param array|null $sublist
     */
    public function __construct(public int $id, public string $label, public ?array $sublist = NULL)
    {}
}