<?php

namespace DesignPatterns\Behavioral\Memento\EditorExample;

class EditorMemento
{
    protected $content;

    public function __construct(string $content)  {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }
}