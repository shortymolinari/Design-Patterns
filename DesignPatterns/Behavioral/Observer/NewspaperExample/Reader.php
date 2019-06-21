<?php

namespace DesignPatterns\Behavioral\Observer\NewspaperExample;

use SplSubject;
use SplObserver;

class Reader implements SplObserver{
    private $name;
   
    public function __construct($name) {
        $this->name = $name;
    }
   
    public function update(SplSubject $subject) {
        return $this->name ." is reading breakout news <b>{$subject->getContent()}</b>"; // . PHP_EOL
    }
}