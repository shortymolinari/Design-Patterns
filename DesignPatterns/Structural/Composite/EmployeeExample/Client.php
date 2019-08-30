<?php

namespace DesignPatterns\Structural\Composite\EmployeeExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Structural\Composite\EmployeeExample\Organization;
use DesignPatterns\Structural\Composite\EmployeeExample\Developer;
use DesignPatterns\Structural\Composite\EmployeeExample\Designer;


// Prepare the employees
$john = new Developer('John Doe', 12000);
$jane = new Designer('Jane Doe', 15000);

// Add them to organization
$organization = new Organization();
$organization->addEmployee($john);
$organization->addEmployee($jane);

echo "Net salaries: " . $organization->getNetSalaries(); // Net Salaries: 27000