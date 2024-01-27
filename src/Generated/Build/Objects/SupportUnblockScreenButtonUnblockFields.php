<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\SupportUnblockScreenButtonUnblockFields\Type;

readonly class SupportUnblockScreenButtonUnblockFields
{
    /**
     * @param Type $type
     * @param float|null $id
     * @param string|null $text Надпись на кнопке
     */
    public function __construct(public Type $type, public ?float $id = NULL, public ?string $text = NULL)
    {}
}