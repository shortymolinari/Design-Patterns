<?php

namespace DesignPatterns\Behavioral\Mediator\ChatRoomExample;

use DesignPatterns\Behavioral\Mediator\ChatRoomExample\ChatRoomMediator;
use DesignPatterns\Behavioral\Mediator\ChatRoomExample\ChatRoom;
use DesignPatterns\Behavioral\Mediator\ChatRoomExample\User;

require "../../../../vendor/autoload.php";

$mediator = new ChatRoom();

$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);

echo $john->send('Hi there!');
echo $jane->send('Hey!');

// Output will be
// Feb 14, 10:58 [John]: Hi there!
// Feb 14, 10:58 [Jane]: Hey!

