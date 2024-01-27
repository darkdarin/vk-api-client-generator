<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\AdsStatisticClickAction\Type;

readonly class AdsStatisticClickAction
{
    /**
     * @param Type|null $type
     * @param string|null $url
     */
    public function __construct(public ?Type $type = NULL, public ?string $url = NULL)
    {}
}