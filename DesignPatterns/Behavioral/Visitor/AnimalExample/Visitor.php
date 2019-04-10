<?php

namespace DesignPatterns\Behavioral\Visitor\AnimalExample;

require "../../../../vendor/autoload.php";

use DesignPatterns\Behavioral\Visitor\AnimalExample\Monkey;
use DesignPatterns\Behavioral\Visitor\AnimalExample\Lion;
use DesignPatterns\Behavioral\Visitor\AnimalExample\Dolphin;
use DesignPatterns\Behavioral\Visitor\AnimalExample\Speak;
use DesignPatterns\Behavioral\Visitor\AnimalExample\Jump;


$monkey = new Monkey();
$lion = new Lion();
$dolphin = new Dolphin();

$speak = new Speak();
$jump = new Jump();

$monkey->accept($speak);    // Ooh oo aa aa!    
//$lion->accept($speak);      // Roaaar!
//$dolphin->accept($speak);   // Tuut tutt tuutt!