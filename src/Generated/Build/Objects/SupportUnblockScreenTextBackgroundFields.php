<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\SupportUnblockScreenTextBackgroundFields\Type;

readonly class SupportUnblockScreenTextBackgroundFields
{
    /**
     * @param Type $type
     * @param string|null $text Текст
     * @param string|null $bg_image Полный URL фонового изображения
     */
    public function __construct(
        public Type $type,
        public ?string $text = NULL,
        public ?string $bg_image = NULL
    ) {}
}