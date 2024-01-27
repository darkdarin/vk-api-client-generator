<?php

namespace App\Api\Generated\DTO;

use Symfony\Component\Serializer\Attribute\SerializedName;

readonly class Property
{
    /**
     * @param list<string>|null $prefix
     * @param TypeEnum|list<TypeEnum>|null $type
     * @param array<string, Property>|null $properties
     * @param list<Property>|null $oneOf
     * @param list<Property>|null $allOf
     * @param list<Property>|null $anyOf
     * @param list<mixed>|null $enum
     * @param list<string>|null $enumNames
     */
    public function __construct(
        public ?array $prefix = null,
        public ?FormatEnum $format = null,
        public TypeEnum|array|null $type = null,
        public ?array $properties = null,
        public ?array $examples = null,
        public string|int|float|bool|null $const = null,
        public ?array $oneOf = null,
        public ?array $allOf = null,
        public ?array $anyOf = null,
        public ?Property $items = null,
        public ?int $maxItems = null,
        public int $minItems = 0,
        public int|float|null $maximum = null,
        public int|float|null $minimum = null,
        public string|null $pattern = null,
        #[SerializedName('$ref')]
        public string|null $ref = null,
        public array|null $enum = null,
        public array|null $enumNames = null,
        public mixed $default = null,
        public ?Discriminator $discriminator = null,
        public ?bool $additionalProperties = null,
        public bool $required = false,
        public ?int $minProperties = null,
        public ?int $maxProperties = null,
        public int $minLength = 0,
        public ?int $maxLength = null,
        public ?string $description = null,
        public ?string $deprecated_from_version = null,
        public ?EntityEnum $entity = null,
    ) {
    }
}
