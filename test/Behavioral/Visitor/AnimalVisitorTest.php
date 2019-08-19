<?php

namespace Tests\Behavioral\Visitor;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\Visitor\AnimalExample\Lion;
use DesignPatterns\Behavioral\Visitor\AnimalExample\Jump;
use DesignPatterns\Behavioral\Visitor\AnimalExample\Speak;
use DesignPatterns\Behavioral\Visitor\AnimalExample\Animal;
use DesignPatterns\Behavioral\Visitor\AnimalExample\Monkey;
use DesignPatterns\Behavioral\Visitor\AnimalExample\Dolphin;
use DesignPatterns\Behavioral\Visitor\AnimalExample\AnimalOperation;

class AnimalVisitorTest extends TestCase
{
    public $monkey;
    public $lion;
    public $dolphin;

    public $speak;
    public $jump;

    public function setUp():void
    {
        parent::setUp();
        $this->monkey = new Monkey();
        $this->lion = new Lion();
        $this->dolphin = new Dolphin();
        $this->speak = new Speak();
        $this->jump = new Jump();
    }

    /**
     * @group Visitor
     * @test
     */
    public function monkey_accept_visitor_speak() {
        $this->monkey->accept($this->speak);
        $this->assertSame($this->monkey->accept($this->speak), $this->monkey->shout());
    }
    
    /**
     * @group Visitor
     * @test
     */
    public function lion_accept_visitor_speak() {
        $this->lion->accept($this->speak);
        $this->assertSame($this->lion->accept($this->speak), $this->lion->roar());
    }

    /**
     * @group Visitor
     * @test
     */
    public function dolphin_accept_visitor_speak() {
        $this->dolphin->accept($this->speak);
        $this->assertSame($this->dolphin->accept($this->speak), $this->dolphin->speak());
    }

    /**
     * @group Visitor
     * @test
     */
    public function monkey_accept_visitor_jump() {
        $this->monkey->accept($this->jump);
        $this->assertSame($this->monkey->accept($this->jump), 'Jumped 20 feet high! on to the tree!');
    }

    /**
     * @group Visitor
     * @test
     */
    public function lion_accept_visitor_jump() {
        $this->lion->accept($this->jump);
        $this->assertSame($this->lion->accept($this->jump), 'Jumped 7 feet! Back on the ground!');
    }

    /**
     * @group Visitor
     * @test
     */
    public function dolphin_accept_visitor_jump() {
        $this->dolphin->accept($this->jump);
        $this->assertSame($this->dolphin->accept($this->jump), 'Walked on water a little and disappeared');
    }
}