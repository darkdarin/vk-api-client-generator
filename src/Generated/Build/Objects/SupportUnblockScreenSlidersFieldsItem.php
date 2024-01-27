<?php

namespace App\Api\Generated\Build\Objects;

readonly class SupportUnblockScreenSlidersFieldsItem
{
    /**
     * @param string|null $title
     * @param string|null $short_desc Краткое описание, выпадающее при нажатии
     * @param string|null $target_screen Экран, на который происходит переход; обычно содержимое другого экрана - просто заголовок с текстом и кнопкой
     */
    public function __construct(
        public ?string $title = NULL,
        public ?string $short_desc = NULL,
        public ?string $target_screen = NULL
    ) {}
}