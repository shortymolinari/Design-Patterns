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

    public function setUp()
    {
        parent::setUp();
        $this->monkey = new Monkey();
        $this->lion = new Lion();
        $this->dolphin = new Dolphin();
        $this->speak = new Speak();
        $this->jump = new Jump();
    }

    public function test_monkey_accept_visitor_speak() {
        $this->monkey->accept($this->speak);
        $this->assertSame($this->monkey->accept($this->speak), $this->monkey->shout());
    }

    public function test_monkey_accept_visitor_jump() {
        $this->monkey->accept($this->jump);
        $this->assertSame($this->monkey->accept($this->jump), 'Jumped 20 feet high! on to the tree!');
    }
}