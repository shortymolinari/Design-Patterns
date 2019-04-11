<?php

namespace DesignPatterns\Behavioral\Visitor\ElementExample;

class VisitedArray implements Visited
{
    protected $elements = array();

    public function addElement($element){
        $this->elements[]=$element;
    }

    public function getSize(){
        return count($this->elements);
    }
    
    public function accept(Visitor $visitor){
        $visitor->visit($this);
    }
}