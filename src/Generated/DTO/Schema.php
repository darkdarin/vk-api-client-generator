<?php

namespace App\Api\Generated\DTO;

use Symfony\Component\Serializer\Attribute\SerializedName;

readonly class Schema implements SchemaInterface
{
    /**
     * @param list<Method> $methods
     * @param array<string, Property> $definitions
     */
    public function __construct(
        public array $methods = [],
        public array $definitions = [],
        #[SerializedName('$schema')]
        public ?string $schema = null,
        public ?string $title = null,
        public ?string $description = null,
        public ?string $termsOfService = null,
        public ?string $version = null,
    ) {
    }
}
