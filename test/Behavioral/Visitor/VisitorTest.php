<?php

namespace Tests\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor\RoleExample\Role;
use DesignPatterns\Behavioral\Visitor\RoleExample\RoleVisitor;
use DesignPatterns\Behavioral\Visitor\RoleExample\User;
use DesignPatterns\Behavioral\Visitor\RoleExample\Group;

use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    /**
     * @var RoleVisitor
     */
    private $visitor;

    public function setUp():void
    {
        parent::setUp();
        $this->visitor = new RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     *
     * @param Role $role
     */
    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }

    /**
     * @dataProvider provideRoles
     *
     * @param Role $role
     */
    public function testVisitGetSameName(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role->getName(), $this->visitor->getVisited()[0]->getName());
    }
}

