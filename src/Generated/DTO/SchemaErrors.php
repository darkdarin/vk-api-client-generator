<?php

namespace App\Api\Generated\DTO;

use Symfony\Component\Serializer\Attribute\SerializedName;

readonly class SchemaErrors implements SchemaInterface
{
    /**
     * @param array<string, Error> $errors
     * @param array<string, SubCode> $definitions
     */
    public function __construct(
        #[SerializedName('$schema')]
        public string $schema,
        public array $errors,
        public array $definitions = [],
        public ?string $title = null,
        public ?string $description = null,
        public ?string $termsOfService = null,
        public ?string $version = null,
    ) {
    }
}
