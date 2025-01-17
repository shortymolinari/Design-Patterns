<?php
declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\FormatterExample;

class PlainTextFormatter implements Formatter
{
    public function format(string $text): string
    {
        return $text;
    }
}