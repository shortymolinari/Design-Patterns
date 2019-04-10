<?php

namespace Tests\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    /**
     * @var Visitor\RoleVisitor
     */
    private $visitor;

    protected function setUp()
    {
        $this->visitor = new Visitor\RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            [new Visitor\User('Dominik')],
            [new Visitor\Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     *
     * @param Visitor\Role $role
     */
    public function testVisitSomeRole(Visitor\Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }

    /**
     * @dataProvider provideRoles
     *
     * @param Visitor\Role $role
     */
    public function testVisitGetSameName(Visitor\Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role->getName(), $this->visitor->getVisited()[0]->getName());
    }
}

