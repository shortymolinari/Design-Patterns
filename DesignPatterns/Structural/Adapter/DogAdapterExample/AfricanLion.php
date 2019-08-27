<?php

namespace DesignPatterns\Structural\Adapter\DogAdapterExample;

class AfricanLion implements Lion
{
    public function roar()
    {
        return 'roar';
    }
}