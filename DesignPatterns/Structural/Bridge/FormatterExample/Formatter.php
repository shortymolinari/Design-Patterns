<?php
declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\FormatterExample;

interface Formatter
{
    public function format(string $text): string;
}