<?php

namespace DesignPatterns\Behavioral\TemplateMethod\BuilderExample;

class IosBuilder extends Builder
{
    public function test()
    {
        $this->proccessMessage[] = 'Running ios tests';
    }

    public function lint()
    {
        $this->proccessMessage[] = 'Linting the ios code';
    }

    public function assemble()
    {
        $this->proccessMessage[] = 'Assembling the ios build';
    }

    public function deploy()
    {
        $this->proccessMessage[] = 'Deploying ios build to server';
    }
}
