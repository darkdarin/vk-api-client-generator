<?php

namespace App\Api\Generated;

use App\Api\Generated\DTO\SchemaInterface;
use DarkDarin\Serializer\ApiSerializer\ApiSerializerInterface;

class SchemaLoader
{
    /** @var array<string, SchemaInterface> */
    private array $schemas;

    public function __construct(
        private readonly ApiSerializerInterface $serializer,
        string $path,
        string ...$schemas,
    ) {
        $this->schemas = $this->loadSchemasByPath($path, $schemas);
    }

    public function loadSchemasByPath(string $path, array $schemaFiles): array
    {
        $schemas = [];
        foreach ($schemaFiles as $schemaFileName) {
            $schema = file_get_contents($path . DIRECTORY_SEPARATOR . $schemaFileName);
            $schemas[$schemaFileName] = $this->serializer->deserialize($schema, SchemaInterface::class, 'json');
        }

        return $schemas;
    }

    public function getSchema(string $name): ?SchemaInterface
    {
        return $this->schemas[$name] ?? null;
    }
}
