<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseError
{
    /**
     * @param int $error_code Error code
     * @param int|null $error_subcode Error subcode
     * @param string|null $error_msg Error message
     * @param string|null $error_text Localized error message
     * @param array|null $request_params
     */
    public function __construct(
        public int $error_code,
        public ?int $error_subcode = NULL,
        public ?string $error_msg = NULL,
        public ?string $error_text = NULL,
        public ?array $request_params = NULL
    ) {}
}