<?php
declare(strict_types=1);

namespace DesignPatterns\Structural\Facade\OSExample;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}
