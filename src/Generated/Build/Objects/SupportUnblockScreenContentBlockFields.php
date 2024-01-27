<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\SupportUnblockScreenContentBlockFields\ContentType;
use App\Api\Generated\Build\Objects\SupportUnblockScreenContentBlockFields\Type;

readonly class SupportUnblockScreenContentBlockFields
{
    /**
     * @param Type $type
     * @param ContentType|null $content_type Тип контента
     */
    public function __construct(public Type $type, public ?ContentType $content_type = NULL)
    {}
}