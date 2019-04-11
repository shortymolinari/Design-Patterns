<?php

namespace DesignPatterns\Behavioral\Visitor\ElementExample;

class DataVisitor implements Visitor 
{
    protected $info;

    public function visit(VisitedArray $visitedArray){
        $this->info = sprintf ("The array has %d elements", $visitedArray->getSize());
    }

    public function getInfo() {
        return $this->info;
    }
}