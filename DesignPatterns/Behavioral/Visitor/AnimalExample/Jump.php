<?php

namespace DesignPatterns\Behavioral\Visitor\AnimalExample;

class Jump implements AnimalOperation
{
    public function visitMonkey(Monkey $monkey)
    {
        return 'Jumped 20 feet high! on to the tree!';
    }

    public function visitLion(Lion $lion)
    {
        return 'Jumped 7 feet! Back on the ground!';
    }

    public function visitDolphin(Dolphin $dolphin)
    {
        return 'Walked on water a little and disappeared';
    }
}