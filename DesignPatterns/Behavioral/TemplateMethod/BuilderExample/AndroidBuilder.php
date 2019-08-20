<?php

namespace DesignPatterns\Behavioral\TemplateMethod\BuilderExample;


class AndroidBuilder extends Builder
{
    public function test()
    {
        $this->proccessMessage[] = 'Running android tests';
    }

    public function lint()
    {
        $this->proccessMessage[] = 'Linting the android code';
    }

    public function assemble()
    {
        $this->proccessMessage[] = 'Assembling the android build';
    }

    public function deploy()
    {
        $this->proccessMessage[] = 'Deploying android build to server';
    }
}
