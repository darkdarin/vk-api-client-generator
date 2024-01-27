<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\SupportUnblockScreenButtonSupportFields\Type;

readonly class SupportUnblockScreenButtonSupportFields
{
    /**
     * @param Type $type
     * @param float|null $id
     * @param string|null $text
     */
    public function __construct(public Type $type, public ?float $id = NULL, public ?string $text = NULL)
    {}
}