<?php

namespace DesignPatterns\Behavioral\TemplateMethod\JourneyExample;


class BeachJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return "Swimming and sun-bathing";
    }
}