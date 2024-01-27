<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\SupportUnblockScreenButtonSubmitFields\Type;

readonly class SupportUnblockScreenButtonSubmitFields
{
    /**
     * @param Type $type
     * @param float|null $id
     * @param bool|null $disabled
     * @param string|null $text Надпись на кнопке
     * @param string|null $target_screen Индекс экрана для перехода
     */
    public function __construct(
        public Type $type,
        public ?float $id = NULL,
        public ?bool $disabled = NULL,
        public ?string $text = NULL,
        public ?string $target_screen = NULL
    ) {}
}