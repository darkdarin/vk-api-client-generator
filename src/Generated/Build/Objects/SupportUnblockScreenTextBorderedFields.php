<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\SupportUnblockScreenTextBorderedFields\Type;

readonly class SupportUnblockScreenTextBorderedFields
{
    /**
     * @param Type $type
     * @param string|null $text Текст
     * @param bool|null $notify_btn Нужна ли кнопка 'Получить уведомление'
     */
    public function __construct(
        public Type $type,
        public ?string $text = NULL,
        public ?bool $notify_btn = NULL
    ) {}
}