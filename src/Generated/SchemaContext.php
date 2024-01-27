<?php

namespace App\Api\Generated;

readonly class SchemaContext
{
    public function __construct(
        public string $schemaName,
        public string $currentPath,
        public object|array $entity,
        public SchemaLoader $schemaLoader,
    ) {
    }

    public function toRef(string $ref): ?self
    {
        [$schemaName, $path] = $this->getPathAttributes($ref);

        if ($schemaName !== $this->schemaName) {
            $entity = $this->schemaLoader->getSchema($schemaName);
            if ($entity === null) {
                return null;
            }
            $context = new self($schemaName, '/', $entity, $this->schemaLoader);
        } else {
            $context = $this;
        }

        if ($this->isRootPath($path)) {
            return $context->toAbsolutePath($path);
        }

        return $context->toRelativePath($path);
    }

    public function toAbsolutePath(string $path): ?self
    {
        $entity = $this->schemaLoader->getSchema($this->schemaName);
        $context = new self(
            $this->schemaName,
            '/',
            $entity,
            $this->schemaLoader,
        );

        return $context->toRelativePath(ltrim($path, '/'));
    }

    public function toRelativePath(string $path): ?self
    {
        $pathElements = explode('/', $path);

        $currentElement = array_shift($pathElements);
        $currentPath = ltrim($this->currentPath, '/') . '/' . $currentElement;

        if (is_array($this->entity)) {
            if (!array_key_exists($currentElement, $this->entity)) {
                return null;
            }

            $context = new self(
                $this->schemaName,
                $currentPath,
                $this->entity[$currentElement],
                $this->schemaLoader,
            );
        } else {
            if (!property_exists($this->entity, $currentElement)) {
                return null;
            }

            $context = new self(
                $this->schemaName,
                $currentPath,
                $this->entity->$currentElement,
                $this->schemaLoader,
            );
        }

        if (!empty($pathElements)) {
            return $context->toRelativePath(implode('/', $pathElements));
        }

        return $context;
    }

    private function isRootPath(string $path): bool
    {
        return str_starts_with($path, '/');
    }

    private function getPathAttributes(string $path): array
    {
        $parsedPath = explode('#', $path);

        if (count($parsedPath) === 1) {
            return [$this->schemaName, $parsedPath[0]];
        } elseif (empty($parsedPath[0])) {
            return [$this->schemaName, $parsedPath[1]];
        }

        return [$parsedPath[0], $parsedPath[1]];
    }

    public function getCurrentUri(): string
    {
        return $this->schemaName . '#' . $this->currentPath;
    }
}
