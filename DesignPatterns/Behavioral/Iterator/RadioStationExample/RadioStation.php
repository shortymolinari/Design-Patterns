<?php

namespace DesignPatterns\Behavioral\Iterator\RadioStationExample;

class RadioStation
{
    protected $frequency;

    public function __construct(float $frequency)
    {
        $this->frequency = $frequency;
    }

    public function getFrequency(): float
    {
        return $this->frequency;
    }
}