<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\LeadFormsQuestionItem\Type;

readonly class LeadFormsQuestionItem
{
    /**
     * @param string $key
     * @param Type $type
     * @param string|null $label
     * @param array|null $options Опции выбора для типов radio, checkbox, select
     */
    public function __construct(
        public string $key,
        public Type $type,
        public ?string $label = NULL,
        public ?array $options = NULL
    ) {}
}