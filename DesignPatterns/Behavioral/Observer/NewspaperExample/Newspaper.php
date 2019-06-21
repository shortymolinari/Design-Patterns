<?php

namespace DesignPatterns\Behavioral\Observer\NewspaperExample;

use SplSubject;
use SplObserver;

class Newspaper implements SplSubject{
    private $name;
    private $observers = array();
    private $content;
    private $notificationMessage = [];
   
    public function __construct($name) {
        $this->name = $name;
    }

    public function attach(SplObserver $observer) {
        $this->observers[] = $observer;
    }
   
    public function detach(SplObserver $observer) {
       
        $key = array_search($observer,$this->observers, true);
        if($key){
            unset($this->observers[$key]);
        }
    }
   
    public function breakOutNews($content) {
        $this->content = $content;
        $this->notify();
    }
   
    public function getContent() {
        return $this->content." ({$this->name})";
    }
   
    public function notify() {
        foreach ($this->observers as $value) {
            $this->notificationMessage[] = $value->update($this);
        }
    }

    public function getNonotificationMessage($offsetGet) {
        return $this->notificationMessage[$offsetGet];
    }
}