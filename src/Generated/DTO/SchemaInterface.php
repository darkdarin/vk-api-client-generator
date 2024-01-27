<?php

namespace App\Api\Generated\DTO;

use Symfony\Component\Serializer\Attribute\DiscriminatorMap;

#[DiscriminatorMap(typeProperty: '$schema', mapping: [
    'schema-errors.json' => SchemaErrors::class,
    'schema.json' => Schema::class,
])]
interface SchemaInterface
{

}
