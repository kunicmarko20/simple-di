<?php

namespace KunicMarko\SimpleDI;

/**
 * @author Marko Kunic <kunicmarko20@gmail.com>
 */
final class ParameterBag
{
    /**
     * @var array
     */
    private $parameters;

    public function __construct(array $parameters = [])
    {
        $this->parameters = $parameters;
    }

    public function get(string $id)
    {
        if (!array_key_exists($id, $this->parameters)) {
            throw ParameterException::parameterNotFound($id);
        }

        return $this->parameters[$id];
    }

    public function all(): array
    {
        return $this->parameters;
    }

    public function has(string $id): bool
    {
        return array_key_exists($id, $this->parameters);
    }
}
