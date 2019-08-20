<?php 

namespace DesignPatterns\Behavioral\TemplateMethod\BuilderExample;

use DesignPatterns\Behavioral\TemplateMethod\BuilderExample\Builder;
use DesignPatterns\Behavioral\TemplateMethod\BuilderExample\AndroidBuilder;
use DesignPatterns\Behavioral\TemplateMethod\BuilderExample\IosBuilder;

require "../../../../vendor/autoload.php";

$androidBuilder = new AndroidBuilder();
echo $androidBuilder->build('s');

// Output:
// Running android tests
// Linting the android code
// Assembling the android build
// Deploying android build to server

$iosBuilder = new IosBuilder();
echo $iosBuilder->build('s');

// Output:
// Running ios tests
// Linting the ios code
// Assembling the ios build
// Deploying ios build to server