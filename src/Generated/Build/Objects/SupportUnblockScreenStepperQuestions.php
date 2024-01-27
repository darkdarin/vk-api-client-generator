<?php

namespace App\Api\Generated\Build\Objects;

readonly class SupportUnblockScreenStepperQuestions
{
    /**
     * @param string $title Текст вопроса
     * @param string $target_screen Экран, на который происходит переход; обычно содержимое другого экрана - просто заголовок с текстом и кнопкой
     * @param string|null $yes_desc Текст, отображаемый при нажатии на да
     * @param string|null $no_desc Текст, отображаемый при нажатии на нет
     * @param float|null $step
     */
    public function __construct(
        public string $title,
        public string $target_screen,
        public string|null $yes_desc = NULL,
        public string|null $no_desc = NULL,
        public ?float $step = NULL
    ) {}
}