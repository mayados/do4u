<?php

namespace App\Models;

/**
 * This class does not directly call
 */
abstract class Model
{
    abstract public function __construct(array $data);

    public static function make(array $data = []): static
    {
        return new static($data);
    }

    protected function hydrate(array $data): static
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }

        return $this;
    }
}
