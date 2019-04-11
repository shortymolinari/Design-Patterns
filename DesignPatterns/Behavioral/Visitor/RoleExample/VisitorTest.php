<?php

namespace DesignPatterns\Tests\Visitor\RoleExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Behavioral\Visitor\RoleExample\Role;
use DesignPatterns\Behavioral\Visitor\RoleExample\RoleVisitor;
use DesignPatterns\Behavioral\Visitor\RoleExample\User;
use DesignPatterns\Behavioral\Visitor\RoleExample\Group;

class VisitorTest
{
    /**
     * @var RoleVisitor
     */
    private $visitor;

    public function __construct()
    {
        $this->visitor = new RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            new User('Dominik'),
            new Group('Administrators'),
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
       // return $role === $this->visitor->getVisited()[0];
        var_dump($this->visitor->getVisited()[0]->getName());
    }
}
//$role = new \DesignPatterns\Behavioral\Visitor\Role();
$visitorTest = new VisitorTest();

$role = $visitorTest->provideRoles()[1];
var_dump($role);
$visitorTest->testVisitSomeRole($role);