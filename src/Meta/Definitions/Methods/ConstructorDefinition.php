<?php


namespace nrslib\Cfg\Meta\Definitions\Methods;


use nrslib\Cfg\Meta\Definitions\VariantDefinition;

/**
 * Class ConstructorDefinition
 * @package nrslib\Cfg\Meta\Definitions\Methods
 */
class ConstructorDefinition implements MethodDefinitionInterface
{
    /** @var VariantDefinition[] */
    private $arguments = [];
    /** @var string[] */
    private $body = [];

    /**
     * @return VariantDefinition[]
     */
    public function getArguments(): array
    {
        return $this->arguments;
    }

    /**
     * @return string[]
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @param string $name
     * @param string|null $type
     * @return ConstructorDefinition
     */
    public function addArgument(string $name, string $type = null): self
    {
        array_push($this->arguments, new VariantDefinition($name, $type));
        return $this;
    }

    /**
     * @param string $line
     * @return ConstructorDefinition
     */
    public function addBody(string $line): self
    {
        array_push($this->body, $line);
        return $this;
    }
}