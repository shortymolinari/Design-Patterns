<?php

namespace DesignPatterns\Behavioral\Command\BulbExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Behavioral\Command\BulbExample\Bulb;
use DesignPatterns\Behavioral\Command\BulbExample\Command;
use DesignPatterns\Behavioral\Command\BulbExample\RemoteControl;
use DesignPatterns\Behavioral\Command\BulbExample\TurnOnCommand;
use DesignPatterns\Behavioral\Command\BulbExample\TurnOffCommand;

$bulb = new Bulb();

$turnOn = new TurnOnCommand($bulb);
$turnOff = new TurnOffCommand($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn); // Bulb has been lit!
$remote->submit($turnOff); // Darkness!
