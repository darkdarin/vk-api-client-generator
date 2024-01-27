<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\SupportUnblockScreenStepperFields\Type;

readonly class SupportUnblockScreenStepperFields
{
    /**
     * @param Type $type
     * @param string|null $target Экран, на который происходит переход после ответа на все вопросы
     * @param array|null $questions
     */
    public function __construct(
        public Type $type,
        public ?string $target = NULL,
        public ?array $questions = NULL
    ) {}
}