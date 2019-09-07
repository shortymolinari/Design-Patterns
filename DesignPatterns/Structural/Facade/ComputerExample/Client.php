<?php

namespace DesignPatterns\Structural\Facade\ComputerExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Structural\Facade\ComputerExample\ComputerFacade;
use DesignPatterns\Structural\Facade\ComputerExample\Computer;

$computer = new ComputerFacade(new Computer());
echo implode(", ", $computer->turnOn()) . PHP_EOL; // Ouch! Beep beep! Loading.. Ready to be used!
echo implode(", ", $computer->turnOff()) . PHP_EOL; // Bup bup buzzz! Haah! Zzzzz