<?php

namespace App;

abstract class Struct
{
    /**
     * On cloning ensure all objects that are properties are cloned.
     * This assists in issues where objects referenced might be changed
     * at runtime.
     *
     * @return void
     */
    public function __clone()
    {
        foreach ($this as $property => $value) {
            if (is_object($value)) {
                $this->$property = clone $value;
            }
        }
    }

    /**
     * Allow the struct to represented in a call to var_export.
     *
     * @param array $properties
     * @return static
     */
    public function __set_state(array $properties)
    {
        $struct = new static();

        foreach ($properties as $property => $value) {
            $this->$property = $value;
        }
        return $struct;
    }

    /**
     * Prevent any unexpected properties of the Struct being accessed.
     *
     * @param $property
     * @throws RuntimeException
     * @return void
     */
    public function __get($property)
    {
        throw new \RuntimeException('Attempt to access non-existing property ' . $property);
    }

    /**
     * Prevent any unexpected properties of the Struct being set.
     *
     * @param $property
     * @param $value
     * @throws RuntimeException
     * @return void
     */
    public function __set($property, $value)
    {
        throw new \RuntimeException('Attempt to set non-existing property ' . $property);
    }
}

