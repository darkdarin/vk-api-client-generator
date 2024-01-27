<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\SupportUnblockScreenTutorialFields\Type;

readonly class SupportUnblockScreenTutorialFields
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