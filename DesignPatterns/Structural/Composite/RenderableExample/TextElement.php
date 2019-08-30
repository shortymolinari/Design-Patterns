<?php
declare(strict_types=1);

namespace DesignPatterns\Structural\Composite\RenderableExample;

class TextElement implements Renderable
{
    /**
     * @var string
     */
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }
}