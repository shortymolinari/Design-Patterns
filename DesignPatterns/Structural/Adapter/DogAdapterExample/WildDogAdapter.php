<?php

namespace DesignPatterns\Structural\Adapter\DogAdapterExample;

class WildDogAdapter implements Lion
{
    protected $dog;

    public function __construct(WildDog $dog)
    {
        $this->dog = $dog;
    }

    public function roar()
    {
        return $this->dog->bark();
    }
}