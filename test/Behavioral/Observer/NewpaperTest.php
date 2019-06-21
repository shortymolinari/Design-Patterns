<?php

namespace Test\Behavioral\Observer;

use DesignPatterns\Behavioral\Observer\NewspaperExample\Newspaper;
use DesignPatterns\Behavioral\Observer\NewspaperExample\Reader;
use PHPUnit\Framework\TestCase;

class NewpaperTest extends TestCase
{

    private $newspaper;
    private $allen;
    private $jim;
    private $linda;

    public function setUp():void{
        parent::setUp();

        $this->newspaper = new Newspaper('Newyork Times');

        $this->allen = new Reader('Allen');
        $this->jim = new Reader('Jim');
        $this->linda = new Reader('Linda');
    }

    /**
     * @dataProvider messageProvider
     */
    public function testUserCanNotified($expected, $offset)
    {
        $this->newspaper->attach($this->allen);
        $this->newspaper->attach($this->jim);
        $this->newspaper->attach($this->linda);

        $this->newspaper->detach($this->linda);

        $this->newspaper->breakOutNews('USA break down!');
        $this->assertEquals($expected, $this->newspaper->getNonotificationMessage($offset));
    }

    public function messageProvider()
    {
        return [
            ['Allen is reading breakout news <b>USA break down! (Newyork Times)</b>', 0],
            ['Jim is reading breakout news <b>USA break down! (Newyork Times)</b>', 1]
        ];
    }
}