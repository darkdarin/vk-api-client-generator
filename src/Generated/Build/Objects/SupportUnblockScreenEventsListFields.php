<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\SupportUnblockScreenEventsListFields\Type;

readonly class SupportUnblockScreenEventsListFields
{
    /**
     * @param Type $type
     * @param string|null $header Заголовок над пунктами
     * @param array|null $items
     */
    public function __construct(public Type $type, public ?string $header = NULL, public ?array $items = NULL)
    {}
}