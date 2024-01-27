<?php

namespace App\Api\Generated;

use App\Api\Generated\DTO\Discriminator;
use App\Api\Generated\DTO\Property;
use App\Api\Generated\DTO\Schema;
use App\Api\Generated\DTO\TypeEnum;
use DarkDarin\PhpEntityRenderer\Contracts\EntityRendererInterface;
use DarkDarin\PhpEntityRenderer\Contracts\TypeRendererInterface;
use DarkDarin\PhpEntityRenderer\EntityAliases;
use DarkDarin\PhpEntityRenderer\Enums\EnumTypeEnum;
use DarkDarin\PhpEntityRenderer\Enums\VisibilityModifierEnum;
use DarkDarin\PhpEntityRenderer\Renderers\AttributeRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\ClassRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\EnumCaseRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\EnumRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\InterfaceRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\MethodRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\ParameterRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\Types\ArrayTypeRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\Types\BuiltinTypeRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\Types\ClassTypeRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\Types\UnionTypeRenderer;
use DarkDarin\PhpEntityRenderer\Renderers\ValueRenderer;
use Illuminate\Support\Str;
use Symfony\Component\Serializer\Attribute\DiscriminatorMap;
use Symfony\Component\Serializer\Attribute\SerializedName;

class EntityGenerator
{
    use NamespaceHelper;

    /** @var array<string, TypeRendererInterface> */
    private array $resolvedTypes = [];

    public function __construct(
        private readonly SchemaLoader $schemaLoader,
        private readonly string $namespace,
    ) {
    }

    public function generate(): void
    {
        $schema = $this->schemaLoader->getSchema('objects.json');
        if (!$schema instanceof Schema) {
            return;
        }
        $schemaContext = new SchemaContext('objects.json', '/', $schema, $this->schemaLoader);

        foreach ($schema->definitions as $definitionName => $definitionSchema) {
            $definitionSchemaContext = $schemaContext->toRelativePath('definitions/' . $definitionName);
            $this->generateDefinition($definitionName, $definitionSchema, $definitionSchemaContext);
        }
    }

    public function generateDefinitionByRef(string $ref, SchemaContext $context): TypeRendererInterface
    {
        if (!array_key_exists($ref, $this->resolvedTypes)) {
//            $context = $context->toRef($ref);
//            $className = $this->getDefinitionClassName($definitionName);
//            $definition = $this->getPropertyType($schema, $context, $className, $entityAliases);
            $this->resolvedTypes[$ref] = BuiltinTypeRenderer::Mixed;
        }

        return $this->resolvedTypes[$ref];
    }

    public function generateDefinition(
        string $definitionName,
        Property $schema,
        SchemaContext $context,
    ): TypeRendererInterface {
        if (!array_key_exists($context->getCurrentUri(), $this->resolvedTypes)) {
            $className = $this->getDefinitionClassName($definitionName);
            $definition = $this->getPropertyType($schema, $context, $className);
            $this->resolvedTypes[$context->getCurrentUri()] = $definition;
        }

        return $this->resolvedTypes[$context->getCurrentUri()];
    }

    private function getDefinitionClassName(string $definitionName): string
    {
        return $this->getNamespace($this->namespace, 'Objects', Str::studly($definitionName));
    }

    public function getPropertyType(
        Property $property,
        SchemaContext $context,
        string $className,
    ): TypeRendererInterface {
//        if ($property->ref !== null) {
//        }
//
        if ($property->discriminator !== null) {
            return $this->generateDiscriminatorClasses($property->discriminator, $context, $className);
        }

        if ($property->anyOf !== null) {
            return $this->generateOneOfClasses($property->anyOf, $context, $className);
        }

        if ($property->oneOf !== null) {
            return $this->generateOneOfClasses($property->oneOf, $context, $className);
        }

        if ($property->enum !== null) {
            return $this->generateEnum($property, $context, $className);
        }

        if (is_array($property->type)) {
            return new UnionTypeRenderer(
                ...array_map(
                    fn (TypeEnum $type) => $this->getBuiltinType($type),
                    $property->type
                )
            );
        }

        if ($property->type === TypeEnum::Array) {
            if ($property->items !== null) {
                $itemsContext = $context->toRelativePath('items');
                return new ArrayTypeRenderer(
                    $this->getPropertyType($property->items, $itemsContext, $className)
                );
            }

            return new ArrayTypeRenderer();
        }

        if ($property->type === TypeEnum::Object && $property->properties !== null) {
            return $this->generateObject($property, $context, $className);
        }

        return $this->getBuiltinType($property->type);
    }

    private function getBuiltinType(?TypeEnum $type): BuiltinTypeRenderer
    {
        return match ($type) {
            TypeEnum::Object => BuiltinTypeRenderer::Object,
            TypeEnum::String => BuiltinTypeRenderer::String,
            TypeEnum::Number => BuiltinTypeRenderer::Float,
            TypeEnum::Integer => BuiltinTypeRenderer::Int,
            TypeEnum::Boolean => BuiltinTypeRenderer::Bool,
            default => BuiltinTypeRenderer::Mixed,
        };
    }

    private function generateObject(
        Property $property,
        SchemaContext $context,
        string $className,
    ): TypeRendererInterface {
        $entityAliases = new EntityAliases();
        $classRenderer = new ClassRenderer($className);
        $classRenderer->setReadonly();

        if ($property->description !== null) {
            $classRenderer->setDescription($property->description);
        }

        $constructor = new MethodRenderer('__construct');
        $constructor->setVisibilityModifier(VisibilityModifierEnum::Public);

        foreach ($property->properties as $propertyName => $propertySchema) {
            $parameterContext = $context->toRelativePath('properties/' . $propertyName);
            $parameterName = $this->variableAlias($propertyName);

            $propertyClassName = $this->getNamespace($className, Str::studly($parameterName));
            $parameterType = $this->getPropertyType($propertySchema, $parameterContext, $propertyClassName);

            if (!$propertySchema->required) {
                $parameterType = $parameterType->setNullable();
            }
            $parameterRenderer = new ParameterRenderer($parameterName, $parameterType);
            $parameterRenderer->setVisibilityModifier(VisibilityModifierEnum::Public);

            if ($parameterName !== $propertyName) {
                $attributeRenderer = new AttributeRenderer(SerializedName::class, [new ValueRenderer($propertyName)]);
                $parameterRenderer->addAttribute($attributeRenderer);
            }

            if ($propertySchema->description !== null) {
                $parameterRenderer->setDescription($propertySchema->description);
            }

            if (!$propertySchema->required) {
                $parameterRenderer->setDefault(new ValueRenderer(null));
            }

            $constructor->addParameter($parameterRenderer);
        }

        $classRenderer->addMethod($constructor);

        $this->saveEntity($classRenderer, $className, $entityAliases);
        return BuiltinTypeRenderer::Mixed;
    }

    private function generateDiscriminatorClasses(
        Discriminator $discriminator,
        SchemaContext $context,
        string $className,
    ): TypeRendererInterface {
        $entityAliases = new EntityAliases();
        $interfaceRenderer = new InterfaceRenderer($className);

        $mapping = [];
        foreach ($discriminator->mapping as $propertyValue => $ref) {
            $type = $this->generateDefinitionByRef($ref, $context);
            if (!$type instanceof ClassTypeRenderer) {
                continue;
            }

            $mapping[$propertyValue] = $entityAliases->addAlias($type->className);
        }
        $arguments = [
            'typeProperty' => new ValueRenderer($discriminator->propertyName),
            'mapping' => new ValueRenderer($mapping),
        ];
        $attributeRenderer = new AttributeRenderer(DiscriminatorMap::class, $arguments);
        $interfaceRenderer->addAttribute($attributeRenderer);

        $this->saveEntity($interfaceRenderer, $className, $entityAliases);
        return new ClassTypeRenderer($className);
    }

    private function generateOneOfClasses(
        array $properties,
        SchemaContext $context,
        string $className,
    ): TypeRendererInterface {
        return BuiltinTypeRenderer::Mixed;
    }

    private function generateEnum(Property $property, SchemaContext $context, string $className): TypeRendererInterface
    {
        $entityAliases = new EntityAliases();

        $enumRenderer = new EnumRenderer($className);
        switch ($property->type) {
            case TypeEnum::Integer:
                $enumRenderer->setType(EnumTypeEnum::Int);
                break;
            case TypeEnum::String:
                $enumRenderer->setType(EnumTypeEnum::String);
                break;
            default:
                throw new GeneratorException(
                    sprintf('[%s]: Unsupported type for enum', $context->getCurrentUri())
                );
        }

        if ($property->enumNames !== null) {
            $cases = array_combine($property->enumNames, $property->enum);
        } else {
            $cases = array_combine($property->enum, $property->enum);
        }

        foreach ($cases as $caseName => $caseValue) {
            $enumRenderer->addCase(
                new EnumCaseRenderer(Str::studly($caseName), new ValueRenderer($caseValue))
            );
        }

        $this->saveEntity($enumRenderer, $className, $entityAliases);

        return new ClassTypeRenderer($className);
    }

    private function variableAlias(string $name): string
    {
        $name = preg_replace('/^[0-9]/iu', '_', $name);
        return preg_replace('/[^0-9a-z_]/iu', '_', $name);
    }

    private function saveEntity(
        EntityRendererInterface $renderer,
        string $className,
        EntityAliases $entityAliases
    ): void {
        file_put_contents($this->getClassPath($className), $renderer->render($entityAliases));
    }
}
