<?php

namespace Tests\Behavioral\Visitor;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\Visitor\ElementExample\Visited;
use DesignPatterns\Behavioral\Visitor\ElementExample\Visitor;
use DesignPatterns\Behavioral\Visitor\ElementExample\VisitedArray;
use DesignPatterns\Behavioral\Visitor\ElementExample\DataVisitor;

class ElementVisitorTest extends TestCase
{
    
    
    public $visitedArray;
    public $dataVisitor;
    public $total;
    public $message;
    
    public function setUp():void
    {
        parent::setUp();
        $this->visitedArray = new VisitedArray();
        $this->dataVisitor = new DataVisitor();

        $this->visitedArray->addElement('Element 1');
        $this->visitedArray->addElement('Element 2');
        $this->visitedArray->addElement('Element 3');
        $this->visitedArray->accept($this->dataVisitor);
        $this->dataVisitor->visit($this->visitedArray);
    }

    /**
     * @group Visitor
     * @test
     */
    public function visited_array_accept_visitor() {
        $this->message = "The array has {$this->visitedArray->getSize()} elements";
        $this->assertSame($this->message, $this->dataVisitor->getInfo());
    }
    
}
