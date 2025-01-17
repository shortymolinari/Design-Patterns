<?php

namespace DesignPatterns\Behavioral\Command\HelloExample;

interface CommandInterface
{
    /**
     * this is the most important method in the Command pattern,
     * The Receiver goes in the constructor.
     */
    public function execute();
}