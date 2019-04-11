<?php

namespace DesignPatterns\Behavioral\Visitor\AnimalExample;


use DesignPatterns\Behavioral\Visitor\AnimalExample\AnimalOperation;
use DesignPatterns\Behavioral\Visitor\AnimalExample\Monkey;

class Speak implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey)
    {
        //echo "El mono grita " . $monkey->shout();
        //var_dump($monkey->shout());
        //echo 'Ooh oo aa aa!';
        return $monkey->shout();
    }

    public function visitLion(Lion $lion)
    {
        return $lion->roar();
    }

    public function visitDolphin(Dolphin $dolphin)
    {
        return $dolphin->speak();
    }


}