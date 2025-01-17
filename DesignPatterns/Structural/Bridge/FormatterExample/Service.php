<?php
declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\FormatterExample;

abstract class Service
{
    /**
     * @var Formatter
     */
    protected $implementation;

    /**
     * @param Formatter $printer
     */
    public function __construct(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * @param Formatter $printer
     */
    public function setImplementation(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get(): string;
}
