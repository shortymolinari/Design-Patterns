<?php

namespace DesignPatterns\Behavioral\Command\BulbExample;

interface Command
{
    public function execute();
    public function undo();
    public function redo();
}