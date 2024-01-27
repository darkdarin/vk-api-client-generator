<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\SupportUnblockScreenHeaderFields\Type;

readonly class SupportUnblockScreenHeaderFields
{
    /**
     * @param Type $type
     * @param string|null $text Текст заголовка
     * @param string|null $subheader Текст подзаголовка
     * @param string|null $image Картинка над текстом
     * @param bool|null $gradient Нужен ли градиент  на фоне заголовка
     * @param bool|null $exit_btn Нужна ли кнопка выхода
     */
    public function __construct(
        public Type $type,
        public ?string $text = NULL,
        public ?string $subheader = NULL,
        public ?string $image = NULL,
        public ?bool $gradient = NULL,
        public ?bool $exit_btn = NULL
    ) {}
}