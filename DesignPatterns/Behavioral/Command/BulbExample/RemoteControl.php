<?php

namespace DesignPatterns\Behavioral\Command\BulbExample;


// Invoker
class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}