<?php

namespace DesignPatterns\Behavioral\State\EditorExample;

class LowerCase implements WritingState
{
    public function write(string $words)
    {
        echo strtolower($words);
    }
}