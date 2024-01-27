<?php

namespace App\Api\Generated\DTO;

use Symfony\Component\Serializer\Attribute\SerializedName;

readonly class SubCodeRef
{
    public function __construct(
        #[SerializedName('$ref')]
        public string $ref
    ) {
    }
}
