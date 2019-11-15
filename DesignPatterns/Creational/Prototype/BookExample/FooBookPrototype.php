<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype\BookExample;

class FooBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Foo';

    public function __clone()
    {
    }
}
