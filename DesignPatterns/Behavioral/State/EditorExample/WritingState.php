<?php

namespace DesignPatterns\Behavioral\State\EditorExample;

interface WritingState
{
    public function write(string $words);
}