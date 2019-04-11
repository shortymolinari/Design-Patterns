<?php

namespace DesignPatterns\Behavioral\Visitor\AnimalExample;

class Dolphin implements Animal
{
    public function speak()
    {
        return 'Tuut tuttu tuutt!';
    }

    public function accept(AnimalOperation $operation)
    {
        return $operation->visitDolphin($this);
    }
}