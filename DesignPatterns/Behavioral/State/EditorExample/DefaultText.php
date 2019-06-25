<?php

namespace DesignPatterns\Behavioral\State\EditorExample;

class DefaultText implements WritingState
{
    public function write(string $words)
    {
        echo $words;
    }
}