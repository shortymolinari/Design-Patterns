<?php

namespace DesignPatterns\Structural\Adapter\DogAdapterExample;

class Hunter
{
    public function hunt(Lion $lion)
    {
        return $lion->roar();
    }
}