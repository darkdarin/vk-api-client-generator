<?php

namespace App\Api\Generated\Build\Objects;

readonly class SupportUnblockScreenTutorialAnswers
{
    /**
     * @param string|null $id
     * @param string|null $title Текст ответа
     * @param bool|null $is_right Является ли вариант ответа правильным
     * @param string|null $explanation Текст, который отображается при выборе этого варианта
     */
    public function __construct(
        public ?string $id = NULL,
        public ?string $title = NULL,
        public ?bool $is_right = NULL,
        public ?string $explanation = NULL
    ) {}
}