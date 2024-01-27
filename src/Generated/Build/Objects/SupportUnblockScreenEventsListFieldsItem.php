<?php

namespace App\Api\Generated\Build\Objects;

readonly class SupportUnblockScreenEventsListFieldsItem
{
    /**
     * @param string|null $date Дата блокировки
     * @param string|null $reason Причина блокировки
     */
    public function __construct(public ?string $date = NULL, public ?string $reason = NULL)
    {}
}