<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\SupportUnblockScreenModalButtonFields\Type;

readonly class SupportUnblockScreenModalButtonFields
{
    /**
     * @param Type $type
     * @param float|null $id
     * @param string|null $label Надпись на кнопке
     * @param mixed $modal
     */
    public function __construct(
        public Type $type,
        public ?float $id = NULL,
        public ?string $label = NULL,
        public mixed $modal = NULL
    ) {}
}