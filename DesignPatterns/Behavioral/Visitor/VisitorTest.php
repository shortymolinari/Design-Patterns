<?php

namespace DesignPatterns\Tests\Visitor;

require "../../../vendor/autoload.php";

use DesignPatterns\Behavioral\Visitor;

class VisitorTest
{
    /**
     * @var Visitor\RoleVisitor
     */
    private $visitor;

    public function __construct()
    {
        $this->visitor = new Visitor\RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            new Visitor\User('Dominik'),
            new Visitor\Group('Administrators'),
            new Visitor\User('Edwin'),
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
       // return $role === $this->visitor->getVisited()[0];
        var_dump($this->visitor->getVisited()[0]->getName());
    }
}
//$role = new \DesignPatterns\Behavioral\Visitor\Role();
$visitorTest = new VisitorTest();

$role = $visitorTest->provideRoles()[0];
var_dump($role);

$visitorTest->testVisitSomeRole($role);