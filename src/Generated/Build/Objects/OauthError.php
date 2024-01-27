<?php

namespace App\Api\Generated\Build\Objects;

readonly class OauthError
{
    /**
     * @param string $error Error type
     * @param string $error_description Error description
     * @param string|null $redirect_uri URI for validation
     */
    public function __construct(
        public string $error,
        public string $error_description,
        public ?string $redirect_uri = NULL
    ) {}
}