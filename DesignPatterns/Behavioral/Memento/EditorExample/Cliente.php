<?php

namespace DesignPatterns\Behavioral\Memento;

use DesignPatterns\Behavioral\Memento\EditorExample\EditorMemento;
use DesignPatterns\Behavioral\Memento\EditorExample\Editor;

require "../../../../vendor/autoload.php";

$editor = new Editor();

// Type some stuff
$editor->type('This is the first sentence.');
$editor->type('This is second.');

// Save the state to restore to : This is the first sentence. This is second.
$saved = $editor->save();

// Type some more
$editor->type('And this is third.');

// Output: Content before Saving
echo $editor->getContent() . PHP_EOL; // This is the first sentence. This is second. And this is third.

// Restoring to last saved state
$editor->restore($saved);

echo $editor->getContent(); // This is the first sentence. This is second.