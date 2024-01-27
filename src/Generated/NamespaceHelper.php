<?php

namespace App\Api\Generated;

trait NamespaceHelper
{
    public function getNamespace(string $defaultNamespace, string ...$context): string
    {
        return implode('\\', array_merge([$defaultNamespace], $context));
    }

    public function getClassPath(string $className): string
    {
        $classNameFragments = explode('\\', $className);
        $classBaseName = array_pop($classNameFragments);
        $classNamespace = implode('\\', $classNameFragments);

        $directory = $this->getNamespaceDirectory($classNamespace);

        if ($directory === false) {
            throw new \RuntimeException('Specified namespace not found.');
        }

        if (!file_exists($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
            throw new \RuntimeException('Can not create folder "' . $directory . '" to save class.');
        }

        return $directory . DIRECTORY_SEPARATOR . $classBaseName . '.php';
    }

    private function getNamespaceDirectory(string $namespace): string|bool
    {
        $composerNamespaces = $this->getDefinedNamespaces();

        $namespaceFragments = explode('\\', trim($namespace, '\\'));
        $undefinedNamespaceFragments = [];

        while ($namespaceFragments) {
            $possibleNamespace = implode('\\', $namespaceFragments) . '\\';

            if (array_key_exists($possibleNamespace, $composerNamespaces)) {
                $path = app()->basePath() . DIRECTORY_SEPARATOR . $composerNamespaces[$possibleNamespace] . implode(
                        '/',
                        array_reverse($undefinedNamespaceFragments)
                    );

                return $this->getAbsolutePath($path);
            }

            $undefinedNamespaceFragments[] = array_pop($namespaceFragments);
        }

        return false;
    }

    private function getDefinedNamespaces(): array
    {
        $composerJsonPath = app()->basePath() . DIRECTORY_SEPARATOR . 'composer.json';
        $composerConfig = json_decode(file_get_contents($composerJsonPath));

        return (array)$composerConfig->autoload->{'psr-4'};
    }

    private function getAbsolutePath(string $path): string
    {
        $firstSlash = str_starts_with($path, DIRECTORY_SEPARATOR);

        $path = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path);
        $parts = array_filter(explode(DIRECTORY_SEPARATOR, $path), '\strlen');
        $absolutes = [];
        foreach ($parts as $part) {
            if ($part === '.') {
                continue;
            }
            if ($part === '..') {
                array_pop($absolutes);
            } else {
                $absolutes[] = $part;
            }
        }

        return ($firstSlash ? DIRECTORY_SEPARATOR : '') . implode(DIRECTORY_SEPARATOR, $absolutes);
    }
}
