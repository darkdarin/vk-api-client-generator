<?php

namespace App\Api\Generated\DTO;

readonly class Method
{
    /**
     * @param list<AccessTokenTypeEnum> $access_token_type
     * @param array<string, Property> $responses
     * @param list<Parameter> $parameters
     * @param list<MethodError> $errors
     */
    public function __construct(
        public string $name,
        public array $access_token_type,
        public array $responses,
        public ?string $description = null,
        public ?int $timeout = null,
        public array $parameters = [],
        public array $errors = [],
        public ?string $customDomain = null,
    ) {
    }
}
