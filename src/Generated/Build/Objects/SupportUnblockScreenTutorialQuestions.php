<?php

namespace App\Api\Generated\Build\Objects;

readonly class SupportUnblockScreenTutorialQuestions
{
    /**
     * @param string|null $id
     * @param string|null $title Текст вопроса
     * @param array|null $answers
     */
    public function __construct(
        public ?string $id = NULL,
        public ?string $title = NULL,
        public ?array $answers = NULL
    ) {}
}