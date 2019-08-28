<?php
declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\FormatterExample;

class PingService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('pong');
    }
}
