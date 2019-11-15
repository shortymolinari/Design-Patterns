<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype\BookExample;

class BarBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Bar';

    public function __clone()
    {
    }
}