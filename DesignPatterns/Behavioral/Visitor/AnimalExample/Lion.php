<?php

namespace DesignPatterns\Behavioral\Visitor\AnimalExample;

class Lion implements Animal
{
    public function roar()
    {
        return 'Roaaar!';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitLion($this);
    }
}