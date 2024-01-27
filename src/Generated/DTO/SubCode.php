<?php

namespace App\Api\Generated\DTO;

readonly class SubCode
{
    public function __construct(
        public ?int $subcode = null,
        public ?string $description = null,
        public ?ViewEnum $view = null,
        public ?string $i18n_title = null,
    ) {
    }
}
