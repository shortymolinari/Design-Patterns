<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite\RenderableExample;

interface Renderable
{
    public function render(): string;
}