<?php

namespace Test\Behavioral\Memento;

use DesignPatterns\Behavioral\Memento\EditorExample\EditorMemento;
use DesignPatterns\Behavioral\Memento\EditorExample\Editor;
use PHPUnit\Framework\TestCase;

class MementoEditorTest extends TestCase
{
    
    private $editor;
    private $editorSaved;

    private $firstLine = 'This is the first sentence.';
    private $secondLine = 'This is second.';
    private $thirdLine = 'And this is third.';

    public function setUp():void {
        parent::setUp();

        $this->editor = new Editor();

    }
    
    public function testSaveTwoLinesThenThreeAndGoBackToTwo()
    {
    
        $this->editor->type($this->firstLine);
        $this->editor->type($this->secondLine);

        $firstLines = $this->editor->getContent();
        $this->assertEquals($firstLines, $this->editor->getContent());

        $this->editorSaved = $this->editor->save();

        $this->editor->type($this->thirdLine);
        $this->assertEquals($firstLines . ' '. $this->thirdLine, $this->editor->getContent());

        $this->editor->restore($this->editorSaved);

        $this->assertEquals($firstLines, $this->editor->getContent());
    }
}
