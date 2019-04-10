<?php

namespace DesignPatterns\Behavioral\Visitor\AnimalExample;

use DesignPatterns\Behavioral\Visitor\AnimalExample\Animal;
use DesignPatterns\Behavioral\Visitor\AnimalExample\AnimalOperation;

class Monkey implements Animal
{
    public function shout()
    {
        return 'Ooh oo aa aa!';
    }

    public function accept(AnimalOperation $operation)
    {
        //var_dump($this);
        return $operation->visitMonkey($this);
    }
}