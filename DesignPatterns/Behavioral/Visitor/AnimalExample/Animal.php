<?php

namespace DesignPatterns\Behavioral\Visitor\AnimalExample;

interface Animal
{
    public function accept(AnimalOperation $operation);
}