<?php

namespace Tests\Structural\Adapter;

use DesignPatterns\Structural\Adapter\DogAdapterExample\WildDogAdapter;
use DesignPatterns\Structural\Adapter\DogAdapterExample\WildDog;
use DesignPatterns\Structural\Adapter\DogAdapterExample\Hunter;
use DesignPatterns\Structural\Adapter\DogAdapterExample\Lion;
use PHPUnit\Framework\TestCase;

class WildDogAdapterTest extends TestCase
{
    public function testWildDogCanRoar()
    {
        $wildDog = new WildDog();
        $wildDogAdapter = new WildDogAdapter($wildDog);

        $hunter = new Hunter();
        $this->assertSame('bark', $hunter->hunt($wildDogAdapter));
    }
}