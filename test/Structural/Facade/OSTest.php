<?php
declare(strict_types=1);

namespace Tests\Structural\Facade;

use DesignPatterns\Structural\Facade\OSExample\Facade;
use DesignPatterns\Structural\Facade\OSExample\OperatingSystem;
use PHPUnit\Framework\TestCase;

class OSTest extends TestCase
{
    public function testComputerOn()
    {
        /** @var OperatingSystem|\PHPUnit_Framework_MockObject_MockObject $os */
        $os = $this->createMock('DesignPatterns\Structural\Facade\OSExample\OperatingSystem');

        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder('DesignPatterns\Structural\Facade\OSExample\Bios')
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();

        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        $facade = new Facade($bios, $os);

        // the facade interface is simple
        $facade->turnOn();

        // but you can also access the underlying components
        $this->assertSame('Linux', $os->getName());
    }
}
