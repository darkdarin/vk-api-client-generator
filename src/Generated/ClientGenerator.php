<?php

namespace App\Api\Generated;

use App\Api\Generated\DTO\Method;
use App\Api\Generated\DTO\Parameter;
use App\Api\Generated\DTO\Schema;
use DarkDarin\PhpEntityRenderer\EntityAliases;
use DarkDarin\PhpEntityRenderer\Enums\VisibilityModifierEnum;
use DarkDarin\PhpEntityRenderer\Renderers\ClassRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\MethodRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\ParameterRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\ValueRenderer;
use Illuminate\Support\Str;

class ClientGenerator
{
    use NamespaceHelper;

    private readonly EntityGenerator $entityGenerator;

    public function __construct(
        private readonly SchemaLoader $schemaLoader,
        private readonly string $namespace,
        private readonly string $clientName,

    ) {
        $this->entityGenerator = new EntityGenerator($schemaLoader, $this->namespace);
    }

    public function generate(): void
    {
        $entityAliases = new EntityAliases();

        $this->entityGenerator->generate();
//        $schema = $this->schemaLoader->getSchema('methods.json');
//        if (!$schema instanceof Schema) {
//            return;
//        }
//        $schemaContext = new SchemaContext('methods.json', '/', $schema, $this->schemaLoader);
//
//        $this->remove($this->getPath($this->namespace));
//        @mkdir($this->getPath($this->namespace));
//
//        $entityAliases = new EntityAliases();
//
//        $classRenderer = new ClassRenderer($this->getNamespace($this->namespace, $this->clientName));
//        $classRenderer->setExtends($entityAliases, AbstractClient::class);
//
//        for ($i = 0; $i < count($schema->methods); $i++) {
//            $methodSchema = $schemaContext->toRelativePath('methods/' . $i);
//            $classRenderer->addMethod($this->getMethodRenderer($schema->methods[$i], $methodSchema));
//        }
//
//        file_put_contents(
//            $this->getPath($this->namespace, $this->clientName . '.php'),
//            $classRenderer->render($entityAliases)
//        );
    }

    private function getMethodRenderer(Method $methodSchema, SchemaContext $schemaContext): MethodRenderer
    {
        $methodRenderer = new MethodRenderer($this->getMethodName($methodSchema->name));
        $methodRenderer->setVisibilityModifier(VisibilityModifierEnum::Public);

        if ($methodSchema->description !== null) {
            $methodRenderer->setDescription($methodSchema->description);
        }
        $methodRenderer->addComment(sprintf('@link https://dev.vk.com/ru/method/%s', $methodSchema->name));
        $methodRenderer->addComment();

        $returnType = '\'mixed\'';
        $methodBody = sprintf(
            'return $this->_call(\'%s\', __METHOD__, func_get_args(), %s);',
            $methodSchema->name,
            $returnType
        );
        $methodRenderer->setMethodBody($methodBody);

        $methodNamespace = $this->getMethodNamespace($methodSchema->name);
        for ($i = 0; $i < count($methodSchema->parameters); $i++) {
            $parameterContext = $schemaContext->toRelativePath('parameters/' . $i);
            $methodRenderer->addParameter(
                $this->getParameter(
                    $methodSchema->parameters[$i],
                    $parameterContext,
                    $methodNamespace
                )
            );
        }

        return $methodRenderer;
    }

    private function getParameter(
        Parameter $parameterSchema,
        SchemaContext $schemaContext,
        string $namespace
    ): ParameterRenderer {
        $type = $this->entityGenerator->getPropertyType($parameterSchema, $schemaContext, $namespace);
        if (!$parameterSchema->required) {
            $type = $type->setNullable();
        }

        $parameterRenderer = new ParameterRenderer($parameterSchema->name, $type);

        if ($parameterSchema->description !== null) {
            $parameterRenderer->setDescription($parameterSchema->description);
        }
        if (!$parameterSchema->required) {
            $parameterRenderer->setDefault(new ValueRenderer(null));
        }

        return $parameterRenderer;
    }

    private function getMethodName(string $methodName): string
    {
        return Str::replace('.', '_', $methodName);
    }

    private function getMethodNamespace(string $methodName): string
    {
        return 'Methods\\' . Str::studly($this->getMethodName($methodName));
    }

    public function remove(string $path): void
    {
        if (is_dir($path)) {
            $objects = scandir($path);
            foreach ($objects as $object) {
                if ($object !== '.' && $object !== '..') {
                    $this->remove($path . DIRECTORY_SEPARATOR . $object);
                }
            }
            rmdir($path);
        } else {
            unlink($path);
        }
    }
}
