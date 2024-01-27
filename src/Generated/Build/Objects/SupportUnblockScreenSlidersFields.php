<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\SupportUnblockScreenSlidersFields\Type;

readonly class SupportUnblockScreenSlidersFields
{
    /**
     * @param Type $type
     * @param array|null $items
     */
    public function __construct(public Type $type, public ?array $items = NULL)
    {}
}