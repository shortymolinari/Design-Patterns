<?php

namespace DesignPatterns\Behavioral\Memento\EditorExample;

class Editor
{
    protected $content = '';

    public function type(string $words) {
        $this->content .=  $words . ' ';
    }

    public function getContent() {
        return trim($this->content);
    }

    public function save() {
        return new EditorMemento($this->content);
    }

    public function restore(EditorMemento $memento) {
        $this->content = $memento->getContent();
    }
}