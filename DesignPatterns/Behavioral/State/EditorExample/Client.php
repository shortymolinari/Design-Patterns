<?php

namespace DesignPatterns\Behavioral\State\EditorExample;

use DesignPatterns\Behavioral\State\EditorExample\WritingState;
use DesignPatterns\Behavioral\State\EditorExample\UpperCase;
use DesignPatterns\Behavioral\State\EditorExample\LowerCase;
use DesignPatterns\Behavioral\State\EditorExample\DefaultText;
use DesignPatterns\Behavioral\State\EditorExample\TextEditor;

require "../../../../vendor/autoload.php";

$editor = new TextEditor(new DefaultText());

$editor->type('First line');

$editor->setState(new UpperCase());

$editor->type('Second line');
$editor->type('Third line');

$editor->setState(new LowerCase());

$editor->type('Fourth line');
$editor->type('Fifth line');

// Output:
// First line
// SECOND LINE
// THIRD LINE
// fourth line
// fifth line