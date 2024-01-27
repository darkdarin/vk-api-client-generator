<?php

namespace App\Api\Generated\DTO;

use Symfony\Component\Serializer\Attribute\SerializedName;

readonly class MethodError
{
    public function __construct(
        #[SerializedName('$ref')]
        public ?string $ref = null,
    ) {
    }
}
