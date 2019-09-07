<?php
declare(strict_types=1);

namespace Tests\Structural\Facade;

use DesignPatterns\Structural\Facade\ComputerExample\ComputerFacade;
use DesignPatterns\Structural\Facade\ComputerExample\Computer;
use PHPUnit\Framework\TestCase;

class ComputerTest extends TestCase
{

    public function setUp():void{
        $this->computer = new ComputerFacade(new Computer());
        $this->on = implode(", ", $this->computer->turnOn());
        $this->off = implode(", ", $this->computer->turnOff());
    }

    public function testComputerOn()
    {
        $this->assertSame('Ouch!, Beep beep!, Loading.., Ready to be used!', $this->on);
    }

    public function testComputerOff()
    {
        $this->assertSame('Bup bup bup buzzzz!, Haaah!, Zzzzz', $this->off);
    }
}
