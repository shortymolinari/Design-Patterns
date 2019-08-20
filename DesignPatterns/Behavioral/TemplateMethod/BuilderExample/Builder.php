<?php

namespace DesignPatterns\Behavioral\TemplateMethod\BuilderExample;

abstract class Builder
{

    public $proccessMessage = [];

    // Template method
    final public function build($format = 's')
    {
        $this->test();
        $this->lint();
        $this->assemble();
        $this->deploy();

        return ($format === 's') 
            ? implode(', ', $this->proccessMessage)
            : $this->proccessMessage;
    }

    abstract public function test();
    abstract public function lint();
    abstract public function assemble();
    abstract public function deploy();
}