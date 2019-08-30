<?php
declare(strict_types=1);

namespace Tests\Structural\Composite;

use DesignPatterns\Structural\Composite\EmployeeExample\Organization;
use DesignPatterns\Structural\Composite\EmployeeExample\Developer;
use DesignPatterns\Structural\Composite\EmployeeExample\Designer;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{   
    public function setUp():void
    {
        $this->john = new Developer('John Doe', 12000);
        $this->jane = new Designer('Jane Doe', 15000);
        $this->organization = new Organization();
    }
    
    public function testNetSalary()
    {
        $this->organization->addEmployee($this->john);
        $this->organization->addEmployee($this->jane);

        $this->netSalary = $this->john->getSalary() + $this->jane->getSalary();

        $this->assertSame($this->netSalary, $this->organization->getNetSalaries());
    }
}