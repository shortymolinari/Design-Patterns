<?php

namespace DesignPatterns\Structural\Adapter\DogAdapterExample;

class AsianLion implements Lion
{
    public function roar()
    {
        return 'roar';
    }
}