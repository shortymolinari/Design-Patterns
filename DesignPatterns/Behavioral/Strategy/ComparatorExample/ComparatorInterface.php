<?php

namespace DesignPatterns\Behavioral\Strategy\ComparatorExample;

interface ComparatorInterface
{
    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @return int
     */
    public function compare($a, $b): int;
}